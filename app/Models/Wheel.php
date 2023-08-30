<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wheel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'image',
        'size',
        'weight',
        'width',
        'lug_nut_form',
        'color',
        'price',
        'approved',
        'created_at',
        'updated_at'
    ];
}
