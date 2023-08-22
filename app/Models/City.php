<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'province_id',
        'name',
        'updated_at',
        'created_at'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
