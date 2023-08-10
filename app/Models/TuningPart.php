<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuningPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'image',
        'car_model',
        'price',
        'approved',
        'created_at',
        'updated_at'
    ];
}
