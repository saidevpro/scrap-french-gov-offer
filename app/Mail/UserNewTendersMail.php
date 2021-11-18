<?php

namespace App\Mail;

use App\Http\Resources\TenderSimpleResource;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class UserNewTendersMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var string
     */
    private $title = 'Neomarché: Nouveux marchés';
    /**
     * @var string
     */
    private $template = 'emails.user.new_tenders';
    /**
     * @var $user
     */
    private User $user;
    /**
     * @var $user
     */
    private $tenders;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $tenders)
    {
        $this->user = $user;
        $this->tenders = $tenders;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->subject($this->title)
                    ->view($this->template)
                    ->with([
                        'user' => $this->user,
                        'tenders' => TenderSimpleResource::collection($this->tenders->take(10))->toArray($request),
                        'count_total' => $this->tenders->count(),
                        'title' => $this->title,
                        'front_url' => trim(config('external.front_url'), '/')
                    ]);
    }
}
