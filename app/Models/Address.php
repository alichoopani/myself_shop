<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'province_id',
        'city_id',
        'postal_code',
        'postal_address',
        'plate_number',
        'floor',
        'latitude',
        'longitude',
        'receiver_firstname',
        'receiver_lastname',
        'receiver_cellphone',
        'approved',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function province()
    {
        return $this->hasOne(Province::class);
    }

    public function city()
    {
        return $this->hasOne(City::class);
    }
}
