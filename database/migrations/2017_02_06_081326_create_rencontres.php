<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRencontres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencontres', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('lieu');
            $table->string('adversaire');
            $table->integer('equipes_id')->unsigned();
            $table->foreign('equipes_id')->references('id')->on('rencontres');
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
         Schema::dropIfExists('rencontres');
    }
}
