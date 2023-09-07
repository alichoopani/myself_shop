<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'feature_id',
        'created_at',
        'updated_at'
    ];
}
