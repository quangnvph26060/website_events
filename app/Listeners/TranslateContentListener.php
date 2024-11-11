<?php

namespace App\Listeners;

use App\Events\TranslateContent;
use Illuminate\Contracts\Queue\ShouldQueue;

class TranslateContentListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  TranslateContent  $event
     * @return void
     */
    public function handle(TranslateContent $event)
    {
        // Call the translateAndSave helper function
        translateAndSave(
            $event->table,
            $event->recordId,
            $event->fields,
            $event->targetLocale
        );
    }
}
