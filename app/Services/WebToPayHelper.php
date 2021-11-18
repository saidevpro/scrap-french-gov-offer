<?php
namespace App\Services;

use WebToPay_Factory;
use WebToPayException;

class WebToPayHelper extends \WebToPay {
    /**
     * Builds full request
     *
     * @param  array   $data Information about current payment request.
     *
     * @throws WebToPayException on data validation error
     */
    public static function buildFullRequestUrl($data) {
        if (!isset($data['sign_password']) || !isset($data['projectid'])) {
            throw new WebToPayException('sign_password or projectid is not provided');
        }
        $password = $data['sign_password'];
        $projectId = $data['projectid'];
        unset($data['sign_password']);
        unset($data['projectid']);

        $factory = new WebToPay_Factory(array('projectId' => $projectId, 'password' => $password));
        return $factory->getRequestBuilder()
            ->buildRequestUrlFromData($data);
    }
}
