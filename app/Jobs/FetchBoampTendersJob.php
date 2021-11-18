<?php

namespace App\Jobs;

use App\Services\BoampApiCallerService;
use App\Services\BoampApiService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FetchBoampTendersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var string
     */
    private $date;
    /**
     * @var int
     */
    private $limit;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($date = null, $limit = null)
    {
        $this->date = $date;
        $this->limit = $limit;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(BoampApiCallerService $boamp)
    {
        $boamp->fetchMarkets($this->date, $this->limit);
    }
}
