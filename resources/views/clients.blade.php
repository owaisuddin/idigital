@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="color: #dae0e5"><b>
                <span class="glyphicon glyphicon-flag" aria-hidden="true" style="margin-bottom: 2%"></span>
                All Clients:
            </b></h2>
        <table class="table table-responsive" style="background-color: white">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Business Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Website Url</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $key => $client)
            <tr>
                <td>{{$client->name}}</td>
                <td><b>{{$client->business_name}}</b></td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone_number}}</td>
                <td>{{$client->website_url}}</td>
                <td>{{$client->country}}</td>
                <td>{{$client->city}}</td>
                <td>
                    <a href="/client_view/{{$client->id}}" type="button"
                       class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-eye-open"></span> View
                    </a>
                    <a href="/client_edit/{{$client->id}}" type="button"
                       class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span> Edit
                    </a>
                    <a href="/client_delete/{{$client->id}}" type="button"
                       class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-remove"></span> Delete
                    </a>
                    <a href="/client_report/{{$client->id}}" type="button"
                       class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-file"></span> Send Report To Client
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection