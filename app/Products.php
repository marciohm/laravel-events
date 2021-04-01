<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProductUpdating;

class Products extends Model
{
    protected $events = [
        'updating' => ProductUpdating::class,
    ];
}
