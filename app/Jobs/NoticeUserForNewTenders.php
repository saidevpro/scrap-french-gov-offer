<?php

namespace App\Jobs;

use App\Mail\UserNewTendersMail;
use App\Models\Tender;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NoticeUserForNewTenders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var $user
     */
    private User $user;

    /**
     * @var $user
     */
    private array $entities;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $user_id, array $entities)
    {
        $this->user = User::find($user_id);
        $this->entities = $entities;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tenders_ids = collect($this->entities)->pluck('tender_id');
        $tenders = Tender::whereIn('id', $tenders_ids)->get();

        foreach($tenders as &$tender) {
            foreach ($this->entities as $entity) {
                if ($entity['tender_id'] == $tender->id) {
                    $tender->matched_researchs = $entity['researchnames'];
                    break;
                }
            }
        }

        Mail::to($this->user->email)->send(new UserNewTendersMail($this->user, $tenders));

        $count = ((int) $this->user->count_received_publication)  + count($tenders);
        $this->user->update([ 'count_received_publication' => $count]);
    }
}
