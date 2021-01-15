@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="color: #dae0e5"><b>
                <span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-bottom: 2%"></span>
                Add Client:
            </b></h2>
        <div class="row card justify-content-center" style="padding-top:40px">
            <div class="container">
                <form method="POST" action="/update_client/{{$client->id}}">
                    @csrf                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">
                                    Name <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" required                                       
                                       placeholder="Enter client name"
                                       value="{{ !empty($client->name) ? $client->name : ''}}" required
                                       autocomplete="name"
                                       id="name"
                                       autofocus>
                                @if($errors->has('name'))
                                    <code>{{ $errors->first('name') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Email
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="email"
                                       class="form-control @error('email') is-invalid @enderror"                                       
                                       name="email" required
                                       placeholder="Enter client email"
                                       value="{{ !empty($client->email) ? $client->email : ''}}" required
                                       autocomplete="email"
                                       id="email"
                                       autofocus>
                                @if($errors->has('email'))
                                    <code>{{ $errors->first('email') }}</code>
                                @endif
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Phone Number
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('phone_number') is-invalid @enderror"
                                       name="phone_number" required                                       
                                       placeholder="Enter client phone number in that format +923102323700"    
                                       value="{{ !empty($client->phone_number) ? $client->phone_number : ''}}"                                                                             
                                       autocomplete="phone_number"
                                       id="phone_number"
                                       autofocus>
                                <small style="color:red"><strong>Number must be in +923102323700 format otherwise text message will not be sent.</strong></small>
                                @if($errors->has('phone_number'))
                                    <code>{{ $errors->first('phone_number') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Website Url:
                                    <span style="color:red"> *</span>
                                    <small>Please include like
                                        http://fxitright.ninjathetech.com/</small>
                                </label>
                                <input type="text"
                                       class="form-control @error('phone_number') is-invalid @enderror"
                                       name="website_url" required                                       
                                       placeholder="Enter client website url"
                                       value="{{ !empty($client->website_url) ? $client->website_url : ''}}" required
                                       autocomplete="website_url"
                                       id="website_url"
                                       autofocus>
                                @if($errors->has('website_url'))
                                    <code>{{ $errors->first('website_url') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Country
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('country') is-invalid @enderror"
                                       name="country" required                                       
                                       placeholder="Enter client country"
                                       value="{{ !empty($client->country) ? $client->country : ''}}" required
                                       autocomplete="country"
                                       id="country"
                                       autofocus>
                                @if($errors->has('country'))
                                    <code>{{ $errors->first('country') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">State
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('state') is-invalid @enderror"
                                       name="state" required                                       
                                       placeholder="Enter client state"
                                       value="{{ !empty($client->state) ? $client->state : ''}}" required
                                       autocomplete="state"
                                       id="state"
                                       autofocus>
                                @if($errors->has('state'))
                                    <code>{{ $errors->first('state') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">City
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('city') is-invalid @enderror"
                                       name="city" required                                       
                                       placeholder="Enter client city"
                                       value="{{ !empty($client->city) ? $client->city : ''}}" required
                                       autocomplete="city"
                                       id="city"
                                       autofocus>
                                @if($errors->has('city'))
                                    <code>{{ $errors->first('city') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Business Name
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('business_name') is-invalid @enderror"
                                       name="business_name" required                                       
                                       placeholder="Enter client business name"
                                       value="{{ !empty($client->business_name) ? $client->business_name : ''}}"
                                       required
                                       autocomplete="business_name"
                                       id="business_name"
                                       autofocus>
                                @if($errors->has('business_name'))
                                    <code>{{ $errors->first('business_name') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Keywords:
                                    <span style="color:red"> *</span>
                                    <small>enter comma seperated keywords (like : mobile,phone)</small>
                                </label>
                                <input type="text"
                                       class="form-control @error('keywords') is-invalid @enderror"
                                       name="keywords"
                                       placeholder="Enter keywords"                                       
                                       value="{{ !empty($client->keywords) ? $client->keywords : ''}}"
                                       required
                                       autocomplete="keywords"
                                       id="keywords"
                                       autofocus>
                                @if($errors->has('keywords'))
                                    <code>{{ $errors->first('keywords') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Website login
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('website_login') is-invalid @enderror"
                                       name="website_login" required                                       
                                       placeholder="Enter client website login"
                                       value="{{ !empty($client->website_login) ? $client->website_login : ''}}"
                                       autocomplete="website_login"
                                       id="website_login"
                                       autofocus>
                                @if($errors->has('website_login'))
                                    <code>{{ $errors->first('website_login') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Hosting login
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('hosting_login') is-invalid @enderror"
                                       name="hosting_login" required                                       
                                       placeholder="Enter client hosting login"
                                       value="{{ !empty($client->hosting_login) ? $client->hosting_login : ''}}"
                                       autocomplete="hosting_login"
                                       id="hosting_login"
                                       autofocus>
                                @if($errors->has('hosting_login'))
                                    <code>{{ $errors->first('hosting_login') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Access to Google Analytic</label>
                                <span style="color:red"> *</span>
                                <input type="text"
                                       class="form-control @error('google_analytic') is-invalid @enderror"
                                       name="google_analytic"  required
                                       placeholder="Enter client google analytic"
                                       value="{{ !empty($client->google_analytic) ? $client->google_analytic : ''}}"
                                       autocomplete="google_analytic"
                                       id="google_analytic"
                                       autofocus>
                                @if($errors->has('google_analytic'))
                                    <code>{{ $errors->first('google_analytic') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Access to Google Search Console</label>
                                <span style="color:red"> *</span>
                                <input type="text"
                                       class="form-control @error('google_search_console') is-invalid @enderror"
                                       name="google_search_console" required
                                       placeholder="Enter client google search console"
                                       value="{{ !empty($client->google_search_console) ? $client->google_search_console : ''}}"
                                       autocomplete="google_search_console"
                                       id="google_search_console"
                                       autofocus>
                                @if($errors->has('google_search_console'))
                                    <code>{{ $errors->first('google_search_console') }}</code>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">Google My Business Access
                                    <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('google_business_access') is-invalid @enderror"
                                       name="google_business_access" required                                       
                                       placeholder="Enter client google business access"
                                       value="{{ !empty($client->google_business_access) ? $client->google_business_access : ''}}"
                                       autocomplete="google_business_access"
                                       id="google_business_access"
                                       autofocus>
                                @if($errors->has('google_business_access'))
                                    <code>{{ $errors->first('google_business_access') }}</code>
                                @endif
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>

                    <button type="submit" class="btn btn-warning float-right">
                        Submit <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection