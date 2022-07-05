<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class passagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passagers')->insert([
            ["num_piece" => 12, "nom" => "amadou", "prenom" => "togo", "sexe" => "homme", "place" => 12, "listes_id" => 1],
            ["num_piece" => 3454, "nom" => "boukertis", "prenom" => "kone", "sexe" => "homme", "place" => 1, "listes_id" => 1],
        ]);
    }
}
