<?php

namespace App\Http\Controllers;

use App\Exceptions\PaymentException;
use App\Http\Resources\SubscriptionResource;
use App\Models\PaymentOrder;
use App\Models\User;
use App\Services\WebToPayHelper;
use App\Traits\Payable;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\HttpCache\SubRequestHandler;
use WebToPay;

class PaymentController extends Controller
{
    use Payable;

    /**
     * Get the list of payments methods
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($this->hasUserValidSubscription(Auth::id())) {
            return response()->json([
                'message' => 'Not authorized'
            ], 401);
        }

        $amount = 100;
        $currency = config('paysera.currency');
        $pMethod = $request->m_id;
        $accepturl = $request->get('sredirect') ?? config('paysera.accepturl');
        $cancelurl = $request->get('credirect') ?? config('paysera.cancelurl');
        $callbackurl = route('payment.callback');

        $user = Auth::user();
        $user_data = [
            'p_firstname' => $user->firstname,
            'p_lastname' => $user->lastname,
            'p_email' => $user->email,
            'p_city' => $user->city ? $user->city->name : null,
            'payment' => $pMethod,
            'personcode' => $user->id
        ];

        $paymentOrder = PaymentOrder::create([
            'user_id' => $user->id,
            'p_amount' => $amount,
            'currency' => $currency,
            'method' => $pMethod,
            'subscription_package_id' => 2,
        ]);

        $config = [
            'amount' => $amount,
            'current' => $currency,
            'projectid' => config('paysera.projectid'),
            'sign_password' => config('paysera.sign_password'),
            'accepturl' => $accepturl,
            'cancelurl' => $cancelurl,
            'callbackurl' => $callbackurl,
            'orderid' => $paymentOrder->id,
            'test' => 1
        ];

        $url = WebToPayHelper::buildFullRequestUrl(array_merge(
            $user_data,
            $config
        ));

        return response()->json([
            'data' => [ 'redirectUrl' => $url ]
        ]);
    }

    /**
     * Get the list of payments methods
     *
     * @return \Illuminate\Http\Response
     */
    public function getMethods(Request $request)
    {
        $projectid = config('paysera.projectid');
        $currency = config('paysera.currency');
        $defaultCountry = config('paysera.defaultCountry');

        $methods = [];
        $wtp = WebToPay::getPaymentMethodList($projectid, $currency)
                ->setDefaultLanguage(config('app.locale'));

        foreach($wtp->getCountries() as $c) {
            if ($defaultCountry !== $c->getCode()) {
                continue;
            }

            foreach($c->getGroups() as $g) {
                foreach($g->getPaymentMethods() as $p) {
                    $methods[] = [
                        'logo_url' => $p->getLogoUrl(),
                        'label' => $p->getTitle(),
                        'id' => $p->getKey(),
                        'group' => $g->getTitle()
                    ];
                }
            }
        }

        return response()->json([
            'data' => $methods
        ]);
    }

    /**
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function getLastSubscription(Request $request)
    {
        $userId = Auth::id();
        $lastPayment = $this->getUserLastPayment($userId);

        if (!$lastPayment) {
            return response()->json([
                'message' => 'No subscription found'
            ]);
        }

        return response()->json([
            'subscription' => new SubscriptionResource($lastPayment)
        ]);
    }

    /**
     * @param Request $request
     * @return void
     */
    public function handlePayment(Request $request)
    {
        $get_data = $request->all();
        $config = [
            'projectid' => config('paysera.projectid'),
            'sign_password' => config('paysera.sign_password'),
        ];

        $response = WebToPay::validateAndParseData($get_data, $config['projectid'], $config['sign_password']);
        if ($response['status'] == 1) {
            $orderId = isset($response['orderid']) ? $response['orderid'] : null;
            $order = PaymentOrder::find($orderId);

            if (!$order) {
                throw new PaymentException('Order with this ID not found (response : '.json_encode($response) . ')');
            }

            if (!$this->validateDataNewPaymentData($order, $response)) {
                throw new PaymentException('Some values are not as expected (response : '.json_encode($response) . ')');
            }

            $order->update([
                'status' => PaymentOrder::COMPLETED,
                'amount' => $response['payamount'],
                'currency' => $response['paycurrency'],
                'contract_id' => $this->generatePaymentContractId($response, $order),
                'expired_at' => $order->getExpirationDateFromCreatedDate()
            ]);

            $user = User::find($order->user_id);
            $user->is_verify = true;
            $user->save();

        } else {
            throw new PaymentException('Payment not yet succeed (response : '.json_encode($response) . ')');
        }
    }

    /**
     * @param PaymentOrder $order
     * @param $data
     *
     * @return boolean
     */
    private function validateDataNewPaymentData(PaymentOrder $order, $data)
    {
        return $order->id == $data['orderid']
            && $order->currency == $data['currency']
            && $order->p_amount == $data['amount']
            && $order->p_amount == $data['payamount'];
    }

    /**
     * @param array $data
     * @param  \App\Models\PaymentOrder $order
     * @return int
     */
    private function generatePaymentContractId(array $data, PaymentOrder $order)
    {
        $orderId = (string) $data['orderid'];
        $userId = (string) $order->user_id;
        $requestId = (string) $data['requestid'];
        $randomCode = (string) rand(1000, 9999);

        return "$orderId$randomCode$requestId$userId";
    }
}
