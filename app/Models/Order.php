<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
