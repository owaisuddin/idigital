@extends('layouts.app')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
@section('content')
    <div class="container">
        <div class="row">            
            <div class="col-sm-12">
                <h2 style="color: #dae0e5;"><b>
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        Send Message To Client:
                    </b></h2>
                <form action="/sendMessage" method="post" style="background: white; padding: 2%; padding-bottom: 6%">
                    @csrf
                    <div class="form-group">
                        <label for="email">Select Message:</label>
                        <select class="form-control message">                                                        
                                <option>
                                    Select Custom Message Template
                                </option>
                                <option>
                                    The following On page SEO factors has been optimized for [Website Name]. For more information please check your email.
                                </option>
                                <option>
                                    The weekly SEO report has been sent for [Website Name]. For more information please check your email.
                                </option>
                                <option>
                                    The following social accounts are updated with new posts. For more information please click here.
                                </option>
                                <option>
                                    Your business domain name has been purchased. It is in coming soon mode. For more information please click here.
                                </option>
                                <option>
                                    First developing phase of your website is completed and your website is up with dummy content. You can see live version here. You can contact us anytime for queries.
                                </option>                            
                        </select>
                        <small>(select custom message template)</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Text Content:</label>
                        <textarea class="form-control message-text" name="content"
                                  rows="8">Send Custom Text Message To Client</textarea>
                        <small>(Or send customize message to customer from here)</small>
                    </div>
                    <div class=" form-group row-fluid">
                        <label>Select Client:</label>
                        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"
                                name="client_id">
                            <option value="all">All Clients</option>
                            @foreach($clients as $client)
                                <option data-subtext="{{$client->phone_number}}"
                                        value="{{$client->id}}">{{$client->name . ' - '.$client->business_name}}</option>
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
@endsection

<script type="text/javascript">
    $(document).ready(function () {
        $('.message').on('change', function() {    
           $('.message-text').val(this.value);
        });
    });
</script>