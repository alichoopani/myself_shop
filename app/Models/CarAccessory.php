<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarAccessory extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id	',
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
