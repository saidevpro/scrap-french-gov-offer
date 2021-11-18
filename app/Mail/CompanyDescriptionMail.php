<?php

namespace App\Mail;

use App\Models\Company;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyDescriptionMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var string
     */
    private $title = 'Neomarché: Nouveau lead';
    /**
     * @var string
     */
    private $template = 'emails.admin.company_description';
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
                        'user' => $this->user, 
                        'company' => $this->user->company, 
                        'title' => $this->title
                    ]);
    }
}
