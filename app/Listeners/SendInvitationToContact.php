<?php

namespace App\Listeners;

use App\Events\ContactInvitation;
use App\Mail\ContactCredential;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendInvitationToContact
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
     * @param  object  $event
     * @return void
     */
    public function handle(ContactInvitation $event)
    {
        Mail::to($event->user)->send(new ContactCredential($event->user, $event->password));
    }
}
