<?php

namespace App;

use App\Events\StockOutputCreated;
use Illuminate\Database\Eloquent\Model;

class StockOutputs extends Model
{
    use StockMovements;

    protected $events = [
        'created' => StockOutputCreated::class,
    ];    
}
