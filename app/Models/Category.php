<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'slug',
        'image',
        'description',
        'icon_type',
        'icon',
        'approved',
        'created_at',
        'updated_at'
    ];
}
