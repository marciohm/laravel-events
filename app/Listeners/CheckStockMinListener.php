<?php

namespace App\Listeners;

use App\Events\ProductUpdating;
use App\Mail\StockLowerMin;

class CheckStockMinListener
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

        if ($product->stock < $product->stock_max * 0.10) {
            \Mail::to('marciohm@gmail.com')->send(new StockLowerMin($product));
        }
    }
}
