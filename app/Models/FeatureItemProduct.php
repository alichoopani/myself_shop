<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureItemProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_id',
        'feature_item_id',
        'created_at',
        'updated_at'
    ];
}
