<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Get all cart items for the authenticated user.
     */
    public function index(): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $cartItems = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'product_id' => $item->product_id,
                    'name' => $item->product->name,
                    'price' => $item->price,
                    'quantity' => $item->quantity,
                    'total' => $item->total,
                    'image' => $item->product->image,
                    'stock_quantity' => $item->product->stock_quantity,
                    'is_available' => $item->product->isAvailable()
                ];
            });

        $cartTotal = $cartItems->sum('total');
        $totalItems = $cartItems->sum('quantity');

        return response()->json([
            'items' => $cartItems,
            'total' => $cartTotal,
            'total_items' => $totalItems
        ]);
    }

    /**
     * Add an item to cart or update quantity if exists.
     */
    public function store(Request $request): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::find($request->product_id);

        if (!$product->isAvailable()) {
            return response()->json(['error' => 'Product is not available'], 400);
        }

        if ($request->quantity > $product->stock_quantity) {
            return response()->json(['error' => 'Insufficient stock'], 400);
        }

        try {
            DB::beginTransaction();

            $cartItem = Cart::where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->first();

            if ($cartItem) {
                // Update existing cart item
                $newQuantity = $cartItem->quantity + $request->quantity;
                
                if ($newQuantity > $product->stock_quantity) {
                    DB::rollBack();
                    return response()->json(['error' => 'Total quantity exceeds stock'], 400);
                }

                $cartItem->update([
                    'quantity' => $newQuantity,
                    'price' => $product->effective_price // Update price to current price
                ]);
            } else {
                // Create new cart item
                $cartItem = Cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity,
                    'price' => $product->effective_price
                ]);
            }

            DB::commit();

            return response()->json([
                'message' => 'Item added to cart successfully',
                'cart_item' => [
                    'id' => $cartItem->id,
                    'product_id' => $cartItem->product_id,
                    'name' => $product->name,
                    'price' => $cartItem->price,
                    'quantity' => $cartItem->quantity,
                    'total' => $cartItem->total,
                    'image' => $product->image
                ]
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to add item to cart'], 500);
        }
    }

    /**
     * Update cart item quantity.
     */
    public function update(Request $request, $id): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = Cart::where('user_id', Auth::id())
            ->where('id', $id)
            ->with('product')
            ->first();

        if (!$cartItem) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }

        if ($request->quantity > $cartItem->product->stock_quantity) {
            return response()->json(['error' => 'Insufficient stock'], 400);
        }

        $cartItem->update([
            'quantity' => $request->quantity,
            'price' => $cartItem->product->effective_price // Update to current price
        ]);

        return response()->json([
            'message' => 'Cart item updated successfully',
            'cart_item' => [
                'id' => $cartItem->id,
                'product_id' => $cartItem->product_id,
                'name' => $cartItem->product->name,
                'price' => $cartItem->price,
                'quantity' => $cartItem->quantity,
                'total' => $cartItem->total,
                'image' => $cartItem->product->image
            ]
        ]);
    }

    /**
     * Remove item from cart.
     */
    public function destroy($id): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $cartItem = Cart::where('user_id', Auth::id())
            ->where('id', $id)
            ->first();

        if (!$cartItem) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }

        $cartItem->delete();

        return response()->json(['message' => 'Item removed from cart successfully']);
    }

    /**
     * Clear all cart items for the authenticated user.
     */
    public function clear(): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        Cart::where('user_id', Auth::id())->delete();

        return response()->json(['message' => 'Cart cleared successfully']);
    }

    /**
     * Get cart item count for the authenticated user.
     */
    public function count(): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['count' => 0]);
        }

        $count = Cart::where('user_id', Auth::id())->sum('quantity');

        return response()->json(['count' => $count]);
    }

    /**
     * Sync cart items from frontend (for when user logs in).
     */
    public function sync(Request $request): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $request->validate([
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1'
        ]);

        try {
            DB::beginTransaction();

            foreach ($request->items as $item) {
                $product = Product::find($item['product_id']);

                if (!$product->isAvailable()) {
                    continue; // Skip unavailable products
                }

                $quantity = min($item['quantity'], $product->stock_quantity);

                Cart::updateOrCreate(
                    [
                        'user_id' => Auth::id(),
                        'product_id' => $item['product_id']
                    ],
                    [
                        'quantity' => $quantity,
                        'price' => $product->effective_price
                    ]
                );
            }

            DB::commit();

            return response()->json(['message' => 'Cart synced successfully']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to sync cart'], 500);
        }
    }
}
