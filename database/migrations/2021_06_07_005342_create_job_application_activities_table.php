<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_application_activities', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('job_post_id');
            $table->timestamp('application_date');
            $table->timestamps();
            $table->unique(array('user_id', 'job_post_id'), 'uc_job_application');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_application_activities');
    }
}
