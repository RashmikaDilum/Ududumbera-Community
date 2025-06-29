<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'sale_price',
        'stock_quantity',
        'in_stock',
        'status',
        'image',
        'featured'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'in_stock' => 'boolean',
        'featured' => 'boolean'
    ];

    /**
     * Get cart items for this product.
     */
    public function cartItems(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * Get the effective price (sale price if available, otherwise regular price).
     */
    public function getEffectivePriceAttribute(): float
    {
        return $this->sale_price ?? $this->price;
    }

    /**
     * Check if product is available for purchase.
     */
    public function isAvailable(): bool
    {
        return $this->in_stock && $this->stock_quantity > 0 && $this->status === 'active';
    }

    /**
     * Scope to get only active products.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope to get only featured products.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Scope to get only in-stock products.
     */
    public function scopeInStock($query)
    {
        return $query->where('in_stock', true)->where('stock_quantity', '>', 0);
    }
}
