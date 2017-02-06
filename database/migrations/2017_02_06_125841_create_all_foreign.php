<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::table('users', function (Blueprint $table) {
        $table->foreign('comite_id')->references('id')->on('comites');
        });
        
            Schema::table('documents', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users');
        });
        
            Schema::table('photos', function (Blueprint $table) {
        $table->foreign('album_id')->references('id')->on('albums');
        });
        
            Schema::table('rencontres', function (Blueprint $table) {
        $table->foreign('equipe_id')->references('id')->on('equipes');
        });
        
            Schema::table('rencontre_user', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('rencontre_id')->references('id')->on('rencontres');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
