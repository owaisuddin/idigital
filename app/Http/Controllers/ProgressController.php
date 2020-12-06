<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function seoOptimization(Request $request,$id){
        $client = Client::where('id',$id)->first();    
        return view('seo_optimization_progress')->with('client',$client);
    }
}
