<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\StockEntryCreated;

class StockEntries extends Model
{
    use StockMovements;

    protected $events = [
        'created' => StockEntryCreated::class,
    ];
}
