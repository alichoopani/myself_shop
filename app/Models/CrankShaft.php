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
        'engine_name',
        'weight',
        'casting_method',
        'number_of_cylinder',
        'price',
        'warranty',
        'approved',
        'created_at',
        'updated_at'
    ];
}
