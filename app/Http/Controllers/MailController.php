<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ReportEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send($client)
    {
        Mail::to($client['client']['email'])->send(new ReportEmail($client));
    }
}