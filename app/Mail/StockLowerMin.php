<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Products;

class StockLowerMin extends Mailable
{
    use Queueable, SerializesModels;

    public $product;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Products $product)
    {
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Estoque abaixo do mínimo')
            ->markdown('emails.stock.lower-min');
    }
}
