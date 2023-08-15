<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id',
        'product_id',
        'imageable_type',
        'imageable_id',
        'created_at',
        'updated_at'
    ];
}
