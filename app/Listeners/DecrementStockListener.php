<?php

namespace App\Listeners;

use App\Events\StockOutputCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DecrementStockListener
{
    /**
     * Handle the event.
     *
     * @param  StockOutputCreated  $event
     * @return void
     */
    public function handle(StockOutputCreated $event)
    {
        $output = $event->getOutput();
        $product = $output->product;
        $product->stock -= $output->quantity;
        $product->save();
    }
}
