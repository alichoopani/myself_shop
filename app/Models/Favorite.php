<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'favoriteable_type',
        'favoriteable_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
