<?php

namespace App\Listeners;

use App\Mail\CompanyDescriptionMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NoticeNewSubscriberToAdmin
{
    /**
     * @var string
     */
    private string $email; 
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->email = config('mail.admin_mail'); 
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $company = $event->user->company; 
        if ($company && $event->user->isProvider()) {
            Mail::to($this->email)->send(new CompanyDescriptionMail($event->user));
        }
    }
}
