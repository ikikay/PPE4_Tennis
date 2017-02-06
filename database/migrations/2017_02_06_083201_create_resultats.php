<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('resultats', function (Blueprint $table) {
            $table->integer('rencontres_id')->unsigned();
            $table->foreign('rencontres_id')->references('id')->on('rencontres');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('confirmation');
            $table->boolean('gagner');
            $table->string('score');
           
            $table->timestamps();
            $table->engine="INNODB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultats');
    }
}
