<?php
namespace App\Services;

class BoampApiService extends RemoteApiService{
    /**
     * @param string $date
     * @return array
     */
    public function fetchTenders(string $date)
    {
        $url = config('external.boamp_api.fetch_tenders_url'); 
        $url = $this->pregReplaceUrl($url, compact('date')); 
        $response = $this->fetch($url); 
        return $response ? $response['item'] : [];
    }
    /**
     * @param string $tender_id
     * @return array
     */
    public function fetchTenderByRef(string $tender_id)
    {
        $url = config('external.boamp_api.fetch_tender_url'); 
        $url = $this->pregReplaceUrl($url, compact('tender_id')); 

        return $this->fetch($url); 
    }
}