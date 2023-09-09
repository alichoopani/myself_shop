<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'feature_id',
        'created_at',
        'updated_at'
    ];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'feature_item_product', 'feature_item_id', 'product_id');
    }
}
