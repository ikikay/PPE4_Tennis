<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('password');
            $table->string('statut');
            $table->integer('classement');
            $table->rememberToken();
            $table->integer('comites_id')->unsigned();
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
        Schema::dropIfExists('users');
    }
}
