<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('website_url');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('business_name');
            $table->string('keywords');
            $table->string('website_login');
            $table->string('hosting_login');
            $table->string('google_analytic');
            $table->string('google_search_console');
            $table->string('google_business_access');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
