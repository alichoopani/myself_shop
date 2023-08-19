<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrankShaft extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'image',
        'car_model',
        'price',
        'warranty',
        'approved',
        'created_at',
        'updated_at'
    ];
}
