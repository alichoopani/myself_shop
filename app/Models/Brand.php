<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'logo',
        'logo',
        'created_at',
        'updated_at'
    ];
}
