<?php

namespace App\Listeners;

use App\Events\ProductAction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\AuditLog;

class LogProductAction
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ProductAction  $event
     * @return void
     */
    public function handle(ProductAction $event)
    {
        AuditLog::create([
            'action' => $event->action,
            'product_id' => $event->product->id,
            'user_id' => auth()->id(),
        ]);
    }
}
