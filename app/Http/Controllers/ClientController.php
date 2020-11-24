<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients')->with('clients' , $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:35',
            'email' => 'required',
            'phone_number' => 'required',
            'website_url' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'business_name' => 'required',
            'website_login' => 'required',
            'hosting_login' => 'required',
            'google_business_access' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('new_client')
                ->withErrors($validator)
                ->withInput();
        }

        Client::create($request->except('_token'));

        return redirect()->route('onboard_client')->withSuccess('Client successfully Onboard.');
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

    public function sendReport($id){

        $client = Client::where('id',$id)->first();
        return view('send_report')->with('client',$client);
    }

    public function sendReportToClient(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $client = Client::where('id',$id)->first();
        $message = $request->get('message');
        $document = $request->file('file');

//        if ($document->getError() == 1) {
//            $max_size = $document->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
//            $error = 'The document size must be less than ' . $max_size . 'Mb.';
//            return redirect()->back()->with('flash_danger', $error);
//        }

        $data = [
            'document' => $document,
            'message' => $message,
            'client' => $client
        ];

        $mail = new MailController();
        $mail->send($data);

        return redirect()->route('onboard_client')->withSuccess('Your progress report has been sent to client successfully.');
    }
}
