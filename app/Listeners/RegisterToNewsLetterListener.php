<?php

namespace App\Listeners;

use App\Events\NewUserHasRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;



class RegisterToNewsLetterListener
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
     * @param  NewUserHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewUserHasRegisteredEvent $event)
    {

        dump("register to news letter");
    }
}
