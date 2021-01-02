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
                <th scope="col"style="width: 13%;">Name</th>
                <th scope="col" style="width: 15%;">Business Name</th>
                <th scope="col" style="width: 10%;">Email</th>
                <th scope="col">Phone</th>
                <th scope="col" style="width: 15%;">Website Url</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>
                <th></th>
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
                    <!-- <a href="/client_delete/{{$client->id}}" type="button"
                       class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span> D
                    </a> -->
                    <!-- <a href="/client_report/{{$client->id}}" type="button"
                       class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-file"></span> Send Report
                    </a>
                    <a href="/seo_optimization/{{$client->id}}" type="button"
                       class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-road"></span> Seo Optimization
                    </a> -->
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection