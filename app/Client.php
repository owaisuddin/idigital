<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'email', 'phone_number','website_url','country','state','city','business_name','keywords','website_login',
        'hosting_login','google_analytic','google_search_console','google_business_access'
    ];
}
