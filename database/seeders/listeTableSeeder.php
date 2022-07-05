<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class listeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listes')->insert([
            // ["destination" => "bamako", "date_depart" => "2002-10-03", "heure" => "12:12", "placeA" => 23, "placeB" => 12, "prixA" => 120000, "prixB" => 100000],
            // ["destination" => "Kayes", "date_depart" => "2002-10-03", "heure" => "12:12", "placeA" => 23, "placeB" => 12, "prixA" => 120000, "prixB" => 100000],
            // ["destination" => "bandiagara", "date_depart" => "2002-10-03", "heure" => "12:12", "placeA" => 23, "placeB" => 12, "prixA" => 120000, "prixB" => 100000],
            // ["destination" => "bankass", "date_depart" => "2002-10-03", "heure" => "12:12", "placeA" => 23, "placeB" => 12, "prixA" => 120000, "prixB" => 100000],
            // ["destination" => "segou", "date_depart" => "2002-10-03", "heure" => "12:12", "placeA" => 23, "placeB" => 12, "prixA" => 120000, "prixB" => 100000],
            // ["destination" => "senegal", "date_depart" => "2002-10-03", "heure" => "12:12", "placeA" => 23, "placeB" => 12, "prixA" => 120000, "prixB" => 100000],
            // ["destination" => "bamako", "date_depart" => "2002-10-03", "heure" => "12:12", "placeA" => 23, "placeB" => 12, "prixA" => 120000, "prixB" => 100000],

        ]);
    }
}
