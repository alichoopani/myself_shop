<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamShaft extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'image',
        'engine_name',
        'description',
        'application',
        'price',
        'warranty',
        'approved',
        'created_at',
        'updated_at'
    ];
}
