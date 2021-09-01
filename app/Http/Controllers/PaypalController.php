<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PaypalController extends Controller
{
    public function paypal(Request $request)
    {
//        $this->get_paypal_token();

        /************************************************************************************************
         * Making request to pay using the obtained token
         ***********************************************************************************************/

        $amount = $request->amount;

        $body = [
            'intent'        => 'sale',
            'payer'         => [
                'payment_method' => 'paypal'
            ],
            'transactions'  => [
                [
                    'amount'          => [
                        'total'    => $amount,
                        'currency' => 'USD',
                        'details'  => [
                            'subtotal' => $amount,
                            'tax'      => '0',
                        ]
                    ],
                    'description'     => 'This is the payment transaction description.',
                    'payment_options' => [
                        'allowed_payment_method' => 'INSTANT_FUNDING_SOURCE'
                    ]
                ]
            ],
            'note_to_payer' => 'Contact us for any questions on your order.',
            'redirect_urls' => [
                'return_url' => 'http://127.0.0.1:8000/paypal/checkout',
                'cancel_url' => 'http://127.0.0.1:8000/paypal/cancel',
            ],
        ];

        $headers      = [
            'Content-Type' => 'application/json',
        ];
        $payment_s    = Http::acceptJson()
            ->withToken(self::get_paypal_token())
            ->withHeaders($headers)
            ->post('https://api-m.sandbox.paypal.com/v1/payments/payment', $body);
        $checkout_url = '';
        $execute_url  = '';

//        print_r(json_decode($payment, true)['id']);
        $payment_data = json_decode($payment_s, true);
        foreach (json_decode($payment_s, true) as $key => $value) {
            if ($key == 'links') {
                foreach ($value as $k => $v) {
                    if (Str::contains($v['href'], 'checkout')) {
                        $checkout_url = $v['href'];
                    }
                    if (Str::contains($v['href'], 'execute')) {
                        $execute_url = $v['href'];
                    }
                }
            }
        }
        $payment = Payment::create([
            'pay_id'      => $payment_data['id'],
            'execute_url' => $execute_url,
            'token'       => Str::after($checkout_url, 'token='),
            'name'        => $request->name,
            'email'       => $request->email,
            'amount'      => $request->amount,
        ]);
        return Redirect::to($checkout_url);
//        return response()->json(json_decode($payment, true));
    }

    public static function get_paypal_token()
    {
        /***************************************************************************************
         * Getting access token from paypal
         **************************************************************************************/
        //setting the content type of the body using headers
        $headers  = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];
        $username = 'AZXF0wDXRtg5Df75sf_xLsN9aK6_dz6ovmnoDdz1eFKHRVvqpuoUSBduvs-L0jb3-zFD5N1XHEnUea1t';
        $password = 'EE91r79Yv0k_ldf4edospHzjNF6-5podWl74uTowzuiIxWrwNrJI0Slr2zQRVwEixGq-4vWo6mgnA4ar';

        $response = Http::acceptJson()
            ->withBasicAuth($username, $password)
            ->withHeaders($headers)
            ->withBody('grant_type=client_credentials', 'application/x-www-form-urlencoded')
            ->post('https://api-m.sandbox.paypal.com/v1/oauth2/token');

        return json_decode($response->getBody(), true)['access_token'];
    }

    public function checkout()
    {
        $payment         = Payment::where('token', request()->query('token'))->first();
        $headers_payment = [
            'Content-Type' => 'application/json',
        ];

        $finalise_payment = Http::acceptJson()
            ->withToken(self::get_paypal_token())
            ->withHeaders($headers_payment)
            ->post($payment->execute_url,
                [
                    'payer_id' => request()->query('PayerID')
                ]
            );

        $returned_data = json_decode($finalise_payment, true);
        $email         = Arr::get($returned_data, 'payer.payer_info.email');
        $first_name    = Arr::get($returned_data, 'payer.payer_info.first_name');
        $last_name     = Arr::get($returned_data, 'payer.payer_info.last_name');


        $decoded      = json_decode($finalise_payment);
        $transactions = $decoded->transactions[0];
        $amount       = Arr::get(json_decode(json_encode($transactions), true), 'amount.total');

        $donor = Donor::create([
            'first_name' => $first_name,
            'last_name'  => $last_name,
            'email'      => $email,
            'amount'     => $amount,
        ]);
        $data  = [
            'name'   => ucwords($first_name),
            'amount' => $amount,
        ];
        return view('pages.thanks', $data);
//        return view('pages.thanks');
//        return response()->json(json_decode($finalise_payment, true));

    }

    public function thanks()
    {
        $data = [
            'name'   => 'omoding',
            'amount' => '100.00',
        ];
        return view('pages.thanks', $data);
    }

    public function cancel(Request $request)
    {
        print_r($request);
    }
}
