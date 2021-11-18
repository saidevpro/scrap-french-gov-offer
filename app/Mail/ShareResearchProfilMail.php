<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShareResearchProfilMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var string
     */
    private $title = 'Neomarché: Partage du profil de recherche';
    /**
     * @var string
     */
    private $template = 'emails.contact.share_research_profil';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $parent_user, User $contact)
    {
        $this->parent_user = $parent_user;
        $this->contact = $contact;
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
                        'contact' => $this->contact,
                        'user' => $this->parent_user,
                        'research_url' => trim(config('external.front_url'), '/').'/'.trim(config('external.front_research_uri'), '/')
                    ]);
    }
}
