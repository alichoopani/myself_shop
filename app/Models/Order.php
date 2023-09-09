<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'address_id',
        'quantity',
        'items_price',
        'items_discount',
        'delivery_price',
        'tax',
        'final_price',
        'tracking_code',
        'status',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function orderHistories()
    {
        return $this->hasMany(OrderHistory::class);
    }

    public function orderTransactions()
    {
        return $this->hasMany(OrderTransaction::class);
    }
}
