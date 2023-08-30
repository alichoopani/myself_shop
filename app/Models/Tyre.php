<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tyre extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'image',
        'structure',
        'load_index',
        'create_week',
        'size',
        'weight',
        'width',
        'grip',
        'top_speed_rating',
        'price',
        'approved',
        'created_at',
        'updated_at'
    ];
}
