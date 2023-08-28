<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'image',
        'model',
        'description',
        'price',
        'warranty',
        'approved',
        'created_at',
        'updated_at'
    ];
}
