<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category',
        'short_description',
        'description',
        'price_start',
        'is_featured',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
