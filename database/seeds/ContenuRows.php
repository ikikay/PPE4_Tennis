<?php

use Illuminate\Database\Seeder;

class ContenuRows extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('contenu')->insert([
        ['page' => 'Le_club',
        'titre' => 'Le club'],
        ['page' => 'La_competition',
        'titre' => 'La comptition'],
        ['page' => 'Infos_Adherents',
        'titre' => 'Infos Adhérents'],
        ['page' => 'L_equipe_pedagogique',
        'titre' => "L'équipe pédagogique"],
        ['page' => 'L_ecole_de_tennis',
        'titre' => "L'école de tennis"],
        ['page' => 'Les_cours_collectifs_adultes',
        'titre' => 'Les cours collectifs adultes']
        ]);

    }

}
