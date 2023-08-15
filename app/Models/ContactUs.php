<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id',
        'content',
        'email',
        'created_at',
        'updated_at'
    ];
}
