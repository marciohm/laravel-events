<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\OrderProductCreated;

class OrderProduct extends Model
{
    protected $events = [
        'created' => OrderProductCreated::class,
    ];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
