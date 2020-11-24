@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form method="POST" action="/save_client/{{$client['id']}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h3>Send Report To {{$client['business_name']}} :-</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="control-label">
                                    Text Message <span style="color:red"> *</span>
                                </label>
                                <input type="text"
                                       class="form-control @error('message') is-invalid @enderror"
                                       name="message" required
                                       value="{{ old('message') }}"
                                       placeholder="Enter message send to client"
                                       value="{{ !empty($client->message) ? $client->message : ''}}"
                                       autocomplete="message"
                                       id="message"
                                       autofocus>
                                @if($errors->has('message'))
                                    <code>{{ $errors->first('message') }}</code>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="control-label">
                                File To Send Client <span style="color:red"> *</span>
                            </label>
                            <input type="file"
                                   class="form-control @error('file') is-invalid @enderror"
                                   name="file"  required
                                   value="{{ old('file') }}"
                                   placeholder="Upload file send to client"
                                   value="{{ !empty($client->file) ? $client->file : ''}}"
                                   autocomplete="file"
                                   id="file"
                                   autofocus>
                            @if($errors->has('file'))
                                <code>{{ $errors->first('file') }}</code>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" style="float: right">Send Report
                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection