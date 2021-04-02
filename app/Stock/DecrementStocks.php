<?php

namespace App\Stock;

use App\Products;

trait DecrementStocks
{
    public function decrement(Products $product, $quantity){
        $product->stock -= $quantity;
        $product->save();
    }
}
