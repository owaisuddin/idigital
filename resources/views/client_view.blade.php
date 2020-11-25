@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="color: #dae0e5"><b>
                <span class="glyphicon glyphicon-globe" aria-hidden="true" style="margin-bottom: 2%"></span>
                {{strtoupper($client['name'].' - '.$client['business_name'])}}:
            </b></h2><hr/>
        <div class="row" style="color: white">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Name : </label>
                    <span>{{$client['name']}}</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Email : </label>
                    <span>{{$client['email']}}</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Website Url : </label>
                    <span>{{$client['website_url']}}</span>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row" style="color: white; padding-top: 1%">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Country : </label>
                    <span>{{$client['country']}}</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>State : </label>
                    <span>{{$client['state']}}</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>City : </label>
                    <span>{{$client['city']}}</span>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row" style="color: white; padding-top: 1%">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Business Name : </label>
                    <span>{{$client['business_name']}}</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Keywords : </label>
                    <span>{{$client['keywords']}}</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Website Login : </label>
                    <span>{{$client['website_login']}}</span>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row" style="color: white; padding-top: 1%">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Hosting login : </label>
                    <span>{{$client['hosting_login']}}</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Access to Google Analytic : </label>
                    <span>{{$client['google_analytic']}}</span>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row" style="color: white; padding-top: 1%">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Access to Google Search Console : </label>
                    <span>{{$client['google_search_console']}}</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Access to Google Search Console : </label>
                    <span>{{$client['google_business_access']}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection