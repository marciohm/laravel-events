<?php

namespace App\Events;

use App\OrderProduct;

class OrderProductCreated
{

    private $orderProduct;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderProduct $orderProduct)
    {
        $this->orderProduct = $orderProduct;
    }

    public function getProduct()
    {
        return $this->orderProduct;
    }
}
