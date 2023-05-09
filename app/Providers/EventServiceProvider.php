<?php

namespace App\Providers;

use App\Events\LogSaved;
use App\Events\MyEvent;
use App\Listeners\DoSomethingWithMyEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use function Illuminate\Events\queueable;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        LogSaved::class => [
            \App\Listeners\LogSaved::class,
        ],
        MyEvent::class => [
            DoSomethingWithMyEvent::class,
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        // if we want to execute the listener on a queue we have to register the event/listener inside this method like

//       Event::listen(queueable(function (LogSaved $event) {
//           // (new MyJob())::dispatch();
//       })->onConnection('redis')->onQueue('logsaved')->delay(now()->addSeconds(10)));
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
