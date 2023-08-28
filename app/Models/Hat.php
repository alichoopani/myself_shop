<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'name',
        'description',
        'image',
        'material',
        'color',
        'price',
        'approved',
        'created_at',
        'updated_at'
    ];
}
