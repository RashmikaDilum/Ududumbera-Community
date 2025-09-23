<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::active()->inStock()->get();
        return view('product', compact('products'));
    }

    /**
     * Display the specified product.
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        // Get related products (same category or featured products, excluding current)
        $relatedProducts = Product::active()
            ->inStock()
            ->where('id', '!=', $product->id)
            ->featured()
            ->take(4)
            ->get();

        // If we don't have enough featured products, get any other active products
        if ($relatedProducts->count() < 4) {
            $additionalProducts = Product::active()
                ->inStock()
                ->where('id', '!=', $product->id)
                ->whereNotIn('id', $relatedProducts->pluck('id'))
                ->take(4 - $relatedProducts->count())
                ->get();
            
            $relatedProducts = $relatedProducts->merge($additionalProducts);
        }

        return view('product-detail', compact('product', 'relatedProducts'));
    }
}
