<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
