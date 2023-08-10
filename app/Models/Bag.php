<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'height',
        'width',
        'length',
        'weight',
        'color',
        'price',
        'approved',
        'created_at',
        'created_at'
    ];
}
