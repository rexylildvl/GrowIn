<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'client_name',
        'email',
        'phone',
        'business_name',
        'business_type',
        'budget_range',
        'platform',
        'goal',
        'status',
        'notes',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

