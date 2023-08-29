<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piston extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'engine_name',
        'image',
        'weight',
        'bore',
        'description',
        'compression',
        'casting_method',
        'price',
        'warranty',
        'approved',
        'created_at',
        'updated_at'
    ];
}
