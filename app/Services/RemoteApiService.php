<?php

namespace App\Services;
use Curl\Curl;

class RemoteApiService {
    /**
     * @param string $url
     * @return string
     */
    protected function pregReplaceUrl(string $url, array $targets)
    {
        return array_reduce(array_keys($targets), function($newUrl, $t) use($targets) {
            return str_replace("[$t]", $targets[$t], $newUrl);
        }, $url);
    }
    /**
     * @param string $url
     * @param array $header = []
     * @return array | bool
     */
    protected function fetch(string $url, array $header = [])
    {
        $curl = new Curl();
        $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
        $curl->setHeader('Content-Type', 'application/json');
        foreach($header as $key => $value) {
            $curl->setHeader($key, $value);
        }
        $curl->get($url);
        return !$curl->error ? json_decode($curl->response, true) : false;
    }
     /**
     * @param array $params
     * @return string
     */
    protected function createUrlParamsFromArray(array $params)
    {
        return array_reduce(array_keys($params), function ($param, $key) use($params) {
            $value = $params[$key];
            if (is_null($value) || $value == '') {
                return $param;
            }

            return $param ? "$param&$key=$value" : "$key=$value";
        }, '');
    }
    /**
     * @param string $address
     * @param string $city
     * @param string $region
     *
     * @return array
     */
    public function fetchLocation(string $address, string $city, string $region = null , string $country = null)
    {
        $map_api_url = config('external.google_map.fetch_location_url');
        $api_key = config('external.google_map.api_key');
        $full_address = array_reduce(func_get_args(), function ($obj, $item ) {
            if ($item) {
                $obj.= "$item,";
            }
            return $obj;
        }, '');

        $url = $this->pregReplaceUrl($map_api_url, ['api_key' => $api_key, 'address' => $full_address]);
        return $this->fetch($url);
    }
}
