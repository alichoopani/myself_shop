<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
        'color_id' => 'array',
        'end_time'  =>  'datetime'
    ];

    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'category_id',
        'brand_id',
        'color_id',
        'image',
        'images',
        'guarantee',
        'unit',
        'dimension',
        'weight',
        'quantity',
        'ordering',
        'status',
        'end_time',
        'discount_rate',
        'buy_price',
        'product_price',
        'discounted_price',
        'final_price',
        'hits',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'approved',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function colors()
    {
        return $this->hasMany(Color::class);
    }
}
