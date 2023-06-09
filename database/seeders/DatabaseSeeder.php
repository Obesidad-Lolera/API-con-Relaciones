<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\Animal::factory(20)->create();
        \App\Models\Animal::factory(5)->create([
            "cola" => false
        ]);

        \App\Models\Animal::factory(1)->create([
            "id" => 10000
        ]);
        \App\Models\Animal::factory(1)->create([
            'id' => 100001,
            'nombre' => "Chorizard",
            'especie' => "Un bife",
            'cantidad_de_patas' => 4,
            'cola' => true
        ]);
    }
}
