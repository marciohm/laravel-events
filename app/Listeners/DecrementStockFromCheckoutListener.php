<?php

namespace App\Listeners;

use App\Events\OrderProductCreated;
use App\Stock\DecrementStocks;

class DecrementStockFromCheckoutListener
{
    use DecrementStocks;

    /**
     * Handle the event.
     *
     * @param  OrderProductCreated  $event
     * @return void
     */
    public function handle(OrderProductCreated $event)
    {
        $output = $event->getProduct();
        $product = $output->product;
        $this->decrement($product, $output->quantity);
    }
}
