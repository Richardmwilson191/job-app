<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('id_1')->nullable();
            $table->integer('id_2')->nullable();
            $table->integer('id_3')->nullable();
            $table->integer('id_4')->nullable();
            $table->integer('id_5')->nullable();
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
        Schema::dropIfExists('skill_lists');
    }
}
