<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_locations', function (Blueprint $table) {
            $table->foreignId('job_post_id');
            $table->string('street_address');
            $table->foreignId('city')->constrained('cities');
            $table->foreignId('state')->constrained('states');
            $table->foreignId('country')->constrained('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_locations');
    }
}
