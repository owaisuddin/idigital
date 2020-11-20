@extends('layouts.app')

@section('content')
<div class="container card" style="padding-top:10px">
    <div class="row justify-content-center">
    <div class="container">
  <form>
    <b><h2>Client Registration Form :-</h1></b>
    <hr/>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">First Name:</label>
          <input type="text" class="form-control" placeholder="First Name" id="first">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Last Name:</label>
          <input type="text" class="form-control" placeholder="Last Name" id="last">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Company:</label>
          <input type="text" class="form-control" placeholder="Company Name" id="company">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="url">Your Website: <small>Please include like http://fxitright.ninjathetech.com/</small></label>
          <input type="url" class="form-control" id="url" placeholder="Website Url">
        </div>
      </div>    
    </div>
    <button type="submit" class="btn btn-primary float-right">Submit</button>
  </form>  
</div>
    </div>
</div>
@endsection
