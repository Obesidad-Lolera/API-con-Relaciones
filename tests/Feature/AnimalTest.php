<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;


class AnimalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_ListarUnoQueExiste(){
        $response = $this->get("/api/v1/animal/100001");

        $response -> assertStatus(200);
        $response->assertJsonStructure([
            'id',
            'nombre',
            'cantidad_de_patas',
            'cola',
            'updated_at',
            'created_at',
            'deleted_at'
        ]);
        $response->assertJsonFragment([
            'id' => 100001,
            'nombre' => "Chorizard",
            'especie' => "Un bife",
            'cantidad_de_patas' => 4,
            'cola' => 1
        ]);

    }
    
    public function test_ListarAnimalQueNoExiste(){
        $response = $this->get("/api/v1/animal/12312312");
        $response -> assertStatus(404);
       
    }

    public function test_EliminarAnimalQueExiste(){
        $response = $this->delete("/api/v1/animal/10000");

        $response -> assertStatus(200);
        $response->assertJsonFragment([ "response" => "Object with ID 10000 deleted"]);
        $this->assertDatabaseMissing("animales",[
            "id" => "10000",
            "deleted_at" => null
        ]);
    }

    public function test_EliminarAnimalQueNoExiste(){
        $response = $this->delete("/api/v1/animal/12312312");
        $response -> assertStatus(404);
       
    }

    public function test_Insertar()
    {
        $response = $this->post('/api/v1/animal',[
            "nombre" => "Marcos",
            "patas" => "3",
            "especie" => "N/A",
            "cola" => 1
        ]);

        $response->assertStatus(201);
        $response->assertJsonStructure([
            'id',
            'nombre',
            'cantidad_de_patas',
            'cola',
            'updated_at',
            'created_at'
        ]);
        $this->assertDatabaseHas('animales',[
            "nombre" => "Marcos",
            "cantidad_de_patas" => 3,
            "especie" => "N/A",
            "cola" => true
        ]);
    }
}
