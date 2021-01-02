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
        
        $client_info = Clients::where('id',$request->get('client_id'))->first();
        $message = "idigitalFixIt Notification:\r\n\r\n"."Hello ".$client_info->name.",\r\n\r\n".$request->get('content')."\r\n\r\n"."Thanks.";
                  ;
        try{
            $client = new Client( $sid, $token );
            
            $client->messages->create(
                $client_info->phone_number,
                [
                    'from' => env('TWILIO_FROM'),
                    'body' => $message,
                ]
            );

        }catch (\Exception $ex){            
            return back()->withError('Text not successfully send. Contact to support team.');
        }
        return back()->withSuccess('Text successfully send to client.');
    }
}
