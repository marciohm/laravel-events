<?php

namespace App\Events;

use App\StockEntries;

class StockEntryCreated
{

    private $entry;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(StockEntries $entry)
    {
        $this->entry = $entry;
    }

    public function getEntry()
    {
        return $this->entry;
    }
}
