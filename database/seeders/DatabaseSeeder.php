<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Création de 2 agents
        $agent = \App\Models\Agent::create([
            'nom_agent' => 'NAPOLETANO',
            'prenom_agent' => 'Pierre'
        ]);

        $agent2 = \App\Models\Agent::create([
            'nom_agent' => 'JEANNOUTOT',
            'prenom_agent' => 'Marcel'
        ]);

        // Création de 2 annonces
        Ad::create([
            'ref_annonce' => '123654FG',
            'prix_annonce' => 125.05,
            'superfice_habitable' => 12.25,
            'nombre_de_piece' => 5,
            'agent_id' => $agent->id
        ]);

        Ad::create([
            'ref_annonce' => '456123FG',
            'prix_annonce' => 521.5,
            'superfice_habitable' => 25.12,
            'nombre_de_piece' => 10,
            'agent_id' => $agent->id
        ]);
    }
}
