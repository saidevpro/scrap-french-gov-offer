<?php
namespace App\Services;

class NoumaApiService extends RemoteApiService {
    /**
     * @param string $date
     * @return array
     */
    public function fetchTenders($before_at = null, $after_at = null)
    {
        $url = config('external.nouma_api.fetch_tenders_url');
        $params = [];

        if ($before_at) {
            $params['published_before'] = $before_at;
        }

        if ($after_at) {
            $params['published_after'] = $after_at;
        }
        $params['page'] = 0;
        $param = $this->createUrlParamsFromArray($params);
        $url = $this->pregReplaceUrl($url, ['params' => $param ]);
        $response = $this->fetchResource($url);

        if (!$response || !isset($response['hits'])) {
            return false;
        }

        yield $response['hits'];

        while($response['page'] < $response['nbPages']) {
            $params['page'] += 1;
            $param = $this->createUrlParamsFromArray($params);
            $url = $this->pregReplaceUrl($url, ['params' => $param ]);
            $response = $this->fetchResource($url);

            if (!$response || !isset($response['hits'])) {
                break;
            }

            yield $response['hits'];
        }

        return true;
    }
    /**
     * @param string $tender_id
     * @return array
     */
    public function fetchTenderByRef(string $tender_id)
    {
        $url = config('external.nouma_api.fetch_tender_url');
        $url = $this->pregReplaceUrl($url, compact('tender_id'));
        return $this->fetchResource($url);
    }
    /**
     * @return array
     */
    public function fetchResource($url)
    {
        $response = $this->fetch($url, $this->getHeader());
        if (!$response) return [];

        return $response;
    }
    /**
     * Return the api headers content
     * @return array
     */
    private function getHeader()
    {
        return [
            'Host' => config('external.nouma_api.host'),
            'Api-Token' => config('external.nouma_api.api_token'),
            'Api-Secret-Key' => config('external.nouma_api.secret_key'),
            'Authorization' => 'Token '.config('external.nouma_api.auth_token'),
            'Connection' => 'keep-alive',
        ];
    }
}
