<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valve extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'image',
        'engine_model',
        'material',
        'quantity',
        'weight',
        'price',
        'warranty',
        'approved',
        'created_at',
        'updated_at'
    ];
}
