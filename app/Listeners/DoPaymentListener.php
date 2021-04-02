<?php

namespace App\Listeners;

use App\Events\OrderCreatedFully;
use App\Payment\PaymentGateway;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DoPaymentListener implements ShouldQueue
{
    use InteractsWithQueue;

    private $paymentGatway;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(PaymentGateway $paymentGatway)
    {
        $this->paymentGatway = $paymentGatway;
    }

    /**
     * Handle the event.
     *
     * @param  OrderCreatedFully  $event
     * @return void
     */
    public function handle(OrderCreatedFully $event)
    {
        $order = $event->getOrder();
        $this->paymentGatway->payment($order);
    }
}
