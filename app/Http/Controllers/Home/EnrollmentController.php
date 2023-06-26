<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
                "amount":1,
                "currency":"SAR",
                "customer_initiated":true,
                "threeDSecure":true,
                "save_card":false,
                "description":"Register Student",
                "metadata":{"udf1":"Metadata 1"},
                "reference":{
                    "transaction":"txn_01",
                    "order":'.$request->course_id.'
                },
                "receipt":{"email":true,"sms":true},
                "customer":{
                    "first_name":' . $profile->full_name . ',
                    "email":' . $profile->email . ',
                    "phone":{
                        "country_code":' . $countryCode . ',
                        "number":' . $number . '
                    }
                },
                    "source":{"id":"src_all"},
                    "post":{"url":"https://holistichealth.sa/enrollments/create"},
                    "redirect":{"url":"https://holistichealth.sa/enrollments/tap-callback"}}',
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
        $course=Course::findOrFail($responseTap->reference->order);
        if ($responseTap->status == 'CAPTURED') {

            // dd($responseTap->reference->order);
            $enrollment=Enrollment::create([
                'user_id'=> auth()->id,
                'course_id'=>$responseTap->reference->order
            ]);

            Payment::create([
                'enrollment_id'=>$enrollment->id,
                'amount'=>$responseTap->amount,
                'currency'=>$responseTap->currency,
                'payment_gateway'=>'Tap',
                'transaction_id'=>$responseTap->id,
            ]);

            return redirect()->route('courses.show', $course->title)->with('success', 'Payment Successfully Made.');
        }

        return redirect()->route('courses.show', $course->title)->with('error', 'Something Went Wrong.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
