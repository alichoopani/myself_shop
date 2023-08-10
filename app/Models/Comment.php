<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'commentable_type',
        'commentable_id',
        'content',
        'approved',
        'created_at',
        'updated_at'
    ];
}
