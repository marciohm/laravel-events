<?php

namespace App\Events;

use App\StockOutputs;

class StockOutputCreated
{
    private $output;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(StockOutputs $output)
    {
        $this->output = $output;
    }

    public function getOutput()
    {
        return $this->output;
    }
}
