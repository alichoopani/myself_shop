<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'likeable_type',
        'likeable_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
