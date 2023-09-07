<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'order_id',
        'final_price',
        'bank_name',
        'bank_recv',
        'bank_send',
        'bank_log',
        'status',
        'created_at',
        'updated_at'
    ];
}
