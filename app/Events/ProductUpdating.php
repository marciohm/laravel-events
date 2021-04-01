<?php

namespace App\Events;

use App\Products;

class ProductUpdating
{

    private $product;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Products $product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }
}
