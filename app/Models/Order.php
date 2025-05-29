<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'user_id',
        'grand_total',
        'payment_method',
        'payment_status', 
        'status',
        'currency',
        'shipping_amount',
        'shipping_method',
        'notes',
    ];

    protected static function booted()
    {
        static::saving(function ($order) {
            $items = $order->items ?? [];
            $grandTotal = 0;

            // Jika $items adalah Collection (relasi), gunakan sum langsung
            if (is_object($items) && method_exists($items, 'sum')) {
                $grandTotal = $items->sum('total_amount');
            } else {
                // Jika $items adalah array (dari form), sum manual
                foreach ($items as $item) {
                    $grandTotal += $item['total_amount'] ?? 0;
                }
            }

            $order->grand_total = $grandTotal;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
