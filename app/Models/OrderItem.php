<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'order_id',
        'color_id',
        'product_id',
        'quantity',
        'price',
        'discounted_price',
        'final_price',
        'costumer_note',
        'extras',
        'approved',
        'created_at',
        'updated_at'
    ];
}
