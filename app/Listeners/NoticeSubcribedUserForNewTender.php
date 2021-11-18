<?php

namespace App\Listeners;

use App\Jobs\NoticeUserForNewTenders;
use App\Models\ResearchProfile;
use App\Models\User;
use App\Services\TenderSearchService;
use App\Traits\TenderSearchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class NoticeSubcribedUserForNewTender
{
    use TenderSearchable;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $tenders_ids = $event->ids;
        $collection = $this->getRelatedProfilResearchUsers();

        $c = [];
        foreach($collection as $research) {
            $user_id = $research->user_id;
            if (!isset($c[$user_id])) {
                $c[$user_id] = [];
            }

            $rdata = $research->data->groupBy('label');
            $data = [];

            foreach($rdata as $key => $d) {
                $data[$key] = $d->pluck('value');
            }

            $tenderSearchService = (new TenderSearchService($tenders_ids))->appendGlobalScope();
            $this->fillTenderSearchServiceWithParams($tenderSearchService, $data);
            $tenders = $tenderSearchService->get();

            if (!$tenders) continue;

            $remember_days = explode(',', $research->remember_days);
            foreach($tenders as $tender) {
                $utenders = & $c[$user_id];

                if (!in_array($tender->id, $utenders)) {
                    $utenders = array_merge($utenders, [ $tender->id => [
                        'tender_id' => $tender->id,
                        'researchnames' => [$research->name],
                        'remember_days' => $remember_days
                    ]]);

                    continue;
                }

                array_push($utenders[$tender->id]['researchnames'], $research->name);
                $utenders[$tender->id]['remember_days'] = array_unique(
                    array_merge($utenders[$tender->id]['remember_days'], $remember_days)
                );
            }
        }

        foreach($c as $user_id => $entities) {
            $days = collect($entities)->reduce(function ($d, $item) {
                if (!$item['remember_days']) {
                    return $d;
                }

                $ds = array_map(function ($d) {
                    return (int) $d;
                }, $item['remember_days']);

                return array_unique( array_merge($d, $ds) );
            }, []);

            $day = (int) date('N');
            $close_day = $this->getClosestDayIndex($day, $days);
            $diff_day = $close_day >= $day ? $close_day - $day : ((7 - $day) + $close_day);

            NoticeUserForNewTenders::dispatch($user_id, $entities)->delay(now()->addDays($diff_day));
        }
    }
    /**
     * @param int $x
     * @param array $array
     * @return int
     */
    private function getClosestDayIndex(int $x, array $array)
    {
        sort($array, SORT_NUMERIC);

        foreach($array as $y) {
            if ($y >= $x) {
                return $y;
            }
        }

        return $array[0];
    }
    /***
     * @param array $tenders_ids
     * @return Collection
     */
    public function getRelatedProfilResearchUsers()
    {
        return ResearchProfile::all();
    }
}
