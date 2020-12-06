@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
            <form method="POST" action="/send_report/{{$client['id']}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h3>Send Report To {{$client['business_name']}} About SEO Optimization :-</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="control-label">
                                One time on page SEO optimization <span style="color:red"> :-</span>
                                </label>
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Title Tags Optimization</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Meta Keywords Optimization </label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Keyword Density Optimization </label>
                                    </div>   
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Integration of Schema Markup</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Geo Tags Optimization</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">KML File Creation and Installation</label>
                                    </div>        
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">H Tags Optimization</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Fixing of 404 Urls</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Parma Links Optimization </label>
                                    </div>   
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Fixing of Duplicate Pages</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Creation Of Google Analytics</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Creation of Google Webmaster Tool</label>
                                    </div>        

                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Xml Site Map</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Fixing GSC Errors</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Blog Page Setup </label>
                                    </div>   
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Internal Linking</label>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Image Optimization</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Alt Tags Optimization</label>
                                    </div>        
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Speed Optimization</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Service Pages Optimization</label>
                                    </div>                                
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Google my Business Page Optimization</label>
                                    </div>   
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Google my Business Page Posting</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Content Uniqueness Checking</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Checking of Website Sandbox</label>
                                    </div>                                            
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Website Mobile Optimization</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Removing Theme Errors</label>
                                    </div>        
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Call to Action Creation</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Leads from Setup</label>
                                    </div>
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Leads Action Setup</label>
                                    </div>   
                                    <div class="checkbox">
                                    <label><input type="checkbox" value="">Setting of no Follow and do Follow Attributes</label>
                                    </div>                
                                    </div>                    
                                    </div>
                            </div>
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