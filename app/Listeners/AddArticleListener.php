<?php

namespace App\Listeners;

use App\Events\onAddArticle;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class AddArticleListener
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
     * @param  onAddArticle  $event
     * @return void
     */
    public function handle(onAddArticle $event)
    {
//        $event->userName;
//        $event->articleName;

        Log::info("Article save in DB:", [$event->userName =>  $event->articleName]);
    }
}
