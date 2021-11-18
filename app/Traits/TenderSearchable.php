<?php
namespace App\Traits;

use App\Services\TenderSearchService;

trait TenderSearchable {
    /**
     * @param array $params
     * @return App\Services\TenderSearchService
     */
    public function buildTenderSearchService(array $params)
    {
        $tenderSearchService = new TenderSearchService();

        $this->fillTenderSearchServiceWithParams($tenderSearchService, $params);

        return $tenderSearchService;
    }

    /**
     * @param TenderSearchService $tenderSearchService
     * @param array $params
     * @return App\Services\TenderSearchService
     */
    public function fillTenderSearchServiceWithParams(TenderSearchService $tenderSearchService, array $params)
    {
        foreach($params as $key => $value) {
            switch($key) {
                case "activities":
                    $tenderSearchService->appendActivity($value);
                    break;
                case "regions":
                    $tenderSearchService->appendRegion($value);
                    break;
                case "departments":
                    $tenderSearchService->appendDepartment($value);
                    break;
                case "cpv":
                    $tenderSearchService->appendCpv($value);
                    break;
                case "bugets":
                    $tenderSearchService->appendBudget($value);
                    break;
                case "state":
                    $tenderSearchService->appendState($value[0]);
                    break;
                case "keywords":
                    $tenderSearchService->appendKeyWord($value);
                    break;
                case "keywords_x":
                    $tenderSearchService->appendNotKeyWord($value);
                case "publish_date_start":
                    if (isset($params['pulish_date_end'])) {
                        $tenderSearchService->appendPublishDate(
                            $value[0],
                            $params['pulish_date_end'][0]
                        );
                    }
                    else {
                        $tenderSearchService->appendPublishDate(
                            $value[0],
                            null
                        );
                    }
                    break;
                case "publish_date_end":
                    if (isset($params['pulish_date_start'])) {
                        $tenderSearchService->appendPublishDate(
                            $params['pulish_date_start'][0],
                            $value[0]
                        );
                    }
                    else {
                        $tenderSearchService->appendPublishDate(
                            null,
                            $value[0]
                        );
                    }
                    break;
                case "closing_date_start":
                    if (isset($params['closing_date_end'])) {
                        $tenderSearchService->appendClosingDate(
                            $value[0],
                            $params['closing_date_end'][0]
                        );
                    }
                    else {
                        $tenderSearchService->appendClosingDate(
                            $value[0],
                            null
                        );
                    }
                    break;
                case "closing_date_end":
                    if (isset($params['closing_date_start'])) {
                        $tenderSearchService->appendClosingDate(
                            $params['closing_date_start'][0],
                            $value[0]
                        );
                    }
                    else {
                        $tenderSearchService->appendClosingDate(
                            null,
                            $value[0]
                        );
                    }
                    break;
            }
        }

        return $tenderSearchService;
    }

}
