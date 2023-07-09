<?php

namespace App\Http\Controllers;

require_once('../laravel_project/vendor/autoload.php');

use App\Models\PaymentRegister;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TapController extends Controller
{

    public function form()
    {
        return view('tap-payment');
    }

    public function payment(Request $request)
    {

        $user = Auth::user();
        if(!$user)
            abort(403);

        $profile = Profile::where('email', $user->email)->firstOrFail();

        $phoneNumber = $profile->mobile; // Replace with your phone number variable

        // Remove the '+' or '00' prefix
        $phoneNumber = preg_replace('/^\+|^00/', '', $phoneNumber);

        // Extract the country code and number
        $countryCode = '';
        $number = '';

        if (preg_match('/^\d{1,3}/', $phoneNumber, $matches)) {
            $countryCode = $matches[0];
            $number = substr($phoneNumber, strlen($countryCode));
        }

        // // Output the results
        // echo 'Country Code: ' . $countryCode . PHP_EOL;
        // echo 'Number: ' . $number . PHP_EOL;
        // dd('stop');
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api.tap.company/v2/charges', [
            'body' => '{
                "amount":350,
                "currency":"SAR",
                "customer_initiated":true,
                "threeDSecure":true,
                "save_card":false,
                "description":"Register Student",
                "metadata":{"udf1":"Metadata 1"},
                "reference":{"transaction":"txn_01","order":"ord_01"},
                "receipt":{"email":true,"sms":true},
                "customer":{
                    "first_name":"' . $profile->full_name . '",
                    "email":"' . $profile->email . '",
                    "phone":{
                        "country_code":"' . $countryCode . '",
                        "number":"' . $number . '"
                    }
                },
                    "source":{"id":"src_all"},
                    "post":{"url":"https://holistichealth.sa/tap-payment"},
                    "redirect":{"url":"https://holistichealth.sa/tap-callback"}}',
            'headers' => [
                'Authorization' => 'Bearer sk_test_Bp25K4oXYmUSvie8NC3OMF1H',
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);

        $response = json_decode($response->getBody());
        // dd($response->transaction->url);
        return redirect($response->transaction->url);
    }

    public function callback(Request $request)
    {
        $input = $request->all();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.tap.company/v2/charges/" . $input['tap_id'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{}",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer sk_test_Bp25K4oXYmUSvie8NC3OMF1H" // SECRET API KEY
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $responseTap = json_decode($response);
        if ($responseTap->status == 'CAPTURED') {

            // dd($responseTap->customer->email);
            $profile=Profile::where('email',$responseTap->customer->email)->firstOrFail();
            $profile->status='paid';
            $profile->save();

            PaymentRegister::create([
                'user_id'=>auth()->id(),
                'amount'=>$responseTap->amount,
                'currency'=>$responseTap->currency,
                'payment_gateway'=>'Tap',
                'transaction_id'=>$responseTap->id,
            ]);
            return redirect()->route('profiles.index')->with('success', 'Payment Successfully Made.');
        }

        return redirect()->route('profiles.index')->with('error', 'Something Went Wrong.');
    }
}
