<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactCredential extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var string
     */
    private $title = 'Neomarches: Invitation';
    /**
     * @var string
     */
    private $template = 'emails.contact.credential';
     /**
     * @var string
     */
    private $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $parent_user = User::find($this->user->parent_id);
        return $this->subject($this->title)
            ->view($this->template)
            ->with([
                'title' => $this->title,
                'user' => $this->user,
                'parent_user' => $parent_user,
                'password' => $this->password,
                'login_url' => trim(config('external.front_url'), '/').'/'.trim(config('external.front_login_uri'), '/')
            ]);
    }
}
