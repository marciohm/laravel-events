<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\StockEntryCreated' => [
            'App\Listeners\IncrementStockListener',
        ],
        'App\Events\StockOutputCreated' => [
            'App\Listeners\DecrementStockListener',
        ],        
        'App\Events\ProductUpdating' => [
            'App\Listeners\CheckStockMaxListener',
            'App\Listeners\CheckStockMinListener',
        ],        
        'App\Events\OrderProductsSaveCompleted' => [
            'App\Listeners\CalculateTotalOrderListener',
        ],        
        'App\Events\OrderCreatedFully' => [
            'App\Listeners\SendMailOrderCreatedListener',
            'App\Listeners\DoPaymentListener',
        ],        
        'App\Events\OrderProductCreated' => [
            'App\Listeners\DecrementStockFromCheckoutListener',
        ],                
        'App\Events\PaymentCompleted' => [
            'App\Listeners\SendMailPaymentCompletedListener',
            'App\Listeners\GenerateReceiptListener',
        ],                


    ];

    //Evento - Algo que aconteceu - dados do evento

    //Ouvinte

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
