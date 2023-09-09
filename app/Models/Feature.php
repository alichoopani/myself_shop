<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'approved',
        'created_at',
        'updated_at'
    ];

    public function featureItems()
    {
        return $this->hasMany(FeatureItem::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'feature_category', 'feature_id', 'category_id');
    }
}
