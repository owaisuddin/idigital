@extends('layouts.app')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h2 style="color: #dae0e5;"><b>
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        Send Message To Client:
                    </b></h2>
                <form action="/sendMessage" method="post" style="background: white; padding: 2%; padding-bottom: 6%">
                    @csrf
                    <div class="form-group">
                        <label for="email">Text Content:</label>
                        <textarea class="form-control" name="content"
                                  rows="8">Send Custom Text Message To Client</textarea>
                        <small>(Or send customize message to customer from here)</small>
                    </div>
                    <div class=" form-group row-fluid">
                        <label>Select Client:</label>
                        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"
                                name="phone">
                            <option value="all">All Clients</option>
                            @foreach($clients as $client)
                                <option data-subtext="{{$client->phone_number}}"
                                        value="{{$client->phone_number}}">{{$client->name . ' - '.$client->business_name}}</option>
                            @endforeach
                        </select>
                        <small>(select All Clients if want to send same message to all clients)</small>
                    </div>
                    <hr/>
                    <button type="submit" class="btn btn-warning float-right">Send Message
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>
@endsection
