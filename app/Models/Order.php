<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'status',
        'payment_status',
        'payment_method',
        'payment_reference',
        'shipping',
        'total',
        'shipping_address',
        'billing_address',
        'notes',
        'shipped_at',
        'delivered_at',
    ];

    protected $casts = [
        'shipping_address' => 'array',
        'billing_address' => 'array',
        'shipping' => 'decimal:2',
        'total' => 'decimal:2',
        'shipped_at' => 'datetime',
        'delivered_at' => 'datetime',
    ];

    /**
     * Get the user that owns the order.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the order items for the order.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Get the total number of items in the order.
     */
    public function getTotalItemsAttribute(): int
    {
        return $this->orderItems->sum('quantity');
    }

    /**
     * Get formatted shipping address.
     */
    public function getFormattedShippingAddressAttribute(): string
    {
        $address = $this->shipping_address;
        if (!$address) return '';

        return implode(', ', array_filter([
            $address['address'] ?? '',
            $address['city'] ?? '',
            $address['postal_code'] ?? '',
            $address['country'] ?? '',
        ]));
    }

    /**
     * Get the customer name from shipping address.
     */
    public function getCustomerNameAttribute(): string
    {
        $address = $this->shipping_address;
        if (!$address) return '';

        return trim(($address['first_name'] ?? '') . ' ' . ($address['last_name'] ?? ''));
    }

    /**
     * Scope for filtering by status.
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Scope for filtering by payment status.
     */
    public function scopePaymentStatus($query, $status)
    {
        return $query->where('payment_status', $status);
    }
}
