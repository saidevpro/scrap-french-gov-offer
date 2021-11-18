<?php

namespace App\Providers;

use App\Events\ContactInvitation;
use App\Events\TendersImported;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\UserRegistered;
use App\Listeners\NoticeNewSubscriberToAdmin;
use App\Listeners\NoticeSubcribedUserForNewTender;
use App\Listeners\SendInvitationToContact;
use App\Listeners\SendUserCredentialsEmail;
use Illuminate\Support\Facades\DB;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Registered::class => [
        //     SendEmailVerificationNotification::class,
        // ],
        UserRegistered::class => [
            SendUserCredentialsEmail::class,
            NoticeNewSubscriberToAdmin::class,
        ],
        ContactInvitation::class => [
            SendInvitationToContact::class
        ],
        TendersImported::class => [
            NoticeSubcribedUserForNewTender::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
        // DB::listen(function($query) {
        //     $time = $query->time / 1000;
        //     $output = "{$query->sql} ::: Timing={$time}s \n\n";
        //     $stdout = fopen('php://stdout', 'w');
        //     fwrite($stdout, $output);
        // });
    }
}
