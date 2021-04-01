<?php

namespace App\Listeners;

use App\Events\ProductUpdating;
use App\Mail\StockGreaterMax;

class CheckStockMaxListener
{

    /**
     * Handle the event.
     *
     * @param  ProductUpdating  $event
     * @return void
     */
    public function handle(ProductUpdating $event)
    {
        $product = $event->getProduct();

        if ($product->stock >= $product->stock_max) {
            \Mail::to('marciohm@gmail.com')->send(new StockGreaterMax($product));
        }
    }
}
