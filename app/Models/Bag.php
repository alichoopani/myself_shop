<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'image',
        'height',
        'width',
        'length',
        'weight',
        'color',
        'price',
        'approved',
        'created_at',
        'created_at'
    ];


}
