<?php

namespace App\Events;

use App\Models\Tender;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TendersImported
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var
     */
    public array $idx;

    /**
     * Create a new event instance.
     *
     * @param Illuminate\Database\Eloquent\Collection $tenders
     * @return void
     */
    public function __construct(array $ids)
    {
        $this->ids = $ids;
    }
}
