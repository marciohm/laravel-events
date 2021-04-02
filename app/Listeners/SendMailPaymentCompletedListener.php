<?php

namespace App\Listeners;

use App\Events\PaymentCompleted;

class SendMailPaymentCompletedListener
{

    /**
     * Handle the event.
     *
     * @param  PaymentCompleted  $event
     * @return void
     */
    public function handle(PaymentCompleted $event)
    {
        $order = $event->getOrder();
    }
}
