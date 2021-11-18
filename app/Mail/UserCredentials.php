<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User; 

class UserCredentials extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var string
     */
    private $title = 'Inscription sur Neomarché'; 
    /**
     * @var string
     */
    private $template = 'emails.user.credentials'; 
    /**
     * @var 
     */
    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->title)
                    ->view($this->template)
                    ->with([
                        'title' => $this->title, 
                        'user' => $this->user, 
                        'login_url' => trim(config('external.front_url'), '/').'/'.trim(config('external.front_login_uri'), '/')
                    ]);
    }
}
