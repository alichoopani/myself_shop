<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'created_at',
        'created_at',
        'deleted_at'
    ];
}
