<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id',
        'content',
        'approved',
        'created_at',
        'created_at'
    ];
}
