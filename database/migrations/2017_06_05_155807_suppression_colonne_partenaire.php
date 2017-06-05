<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuppressionColonnePartenaire extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('partenaires', function (Blueprint $table) {
            $table->dropColumn('twitter');
            $table->dropColumn('facebook');
            $table->dropColumn('tel');
            $table->dropColumn('ville');
            $table->dropColumn('cp');
            $table->dropColumn('adresse');
            $table->dropColumn('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
