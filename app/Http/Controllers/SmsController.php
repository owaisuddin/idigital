<?php

namespace App\Http\Controllers;

use App\Client as Clients;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function sendSms(){
        $clients = Clients::all();
        return view('message')->with('clients',$clients);
    }

    public static function sendCustomMessage(Request $request){
        $sid    = env( 'TWILIO_SID' );
        $token  = env( 'TWILIO_TOKEN' );

        try{
            $client = new Client( $sid, $token );
            $client->messages->create(
                $request->get('phone'),
                [
                    'from' => env('TWILIO_FROM'),
                    'body' => $request->get('content'),
                ]
            );

        }catch (\Exception $ex){
            return back()->withError('Text not successfully send. Contact to support team.');
        }
        return back()->withSuccess('Text successfully send to client.');
    }
}
