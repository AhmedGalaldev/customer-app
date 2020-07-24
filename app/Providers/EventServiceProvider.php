<?php

namespace App\Providers;

use App\Events\NewUserHasRegisteredEvent;
use App\Listeners\WelcomeNewCustomerListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */


    // protected $listen = [
    //     NewUserHasRegisteredEvent::class => [
    //         WelcomeNewCustomerListener::class,
    //     ],
    // ];

    // event generate way
    protected $listen = [
        \App\Events\NewUserHasRegisteredEvent::class => [
            \App\Listeners\WelcomeNewCustomerListener::class,
            \App\Listeners\RegisterToNewsLetterListener::class,
            \App\Listeners\SendSlackNotificationListener::class

        ],
    ];

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
