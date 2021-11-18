<?php
namespace App\Traits;

use App\Models\PaymentOrder;
use DateTime;

trait Payable {

    /**
     * @param int $userId
     * @return App\Models\PaymentOrder
     */
    public function getUserLastPayment($userId)
    {
        return PaymentOrder::where('user_id', $userId)
                ->where('status', PaymentOrder::COMPLETED)
                ->orderBy('id', 'desc')
                ->first();
    }

    /**
     * @param int $userId
     * @return App\Models\PaymentOrder
     */
    public function hasUserValidSubscription($userId)
    {
        $last_payment = $this->getUserLastPayment($userId);

        if (!$last_payment) {
            return false;
        }

        $expired_at = new DateTime($last_payment->expired_at);
        $now = new DateTime();

        return $now < $expired_at;
    }
}
