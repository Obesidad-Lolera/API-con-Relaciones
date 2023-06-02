<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;

class AnimalController extends Controller
{

    public function Listar(Request $request){
        return Animal::all();
    }

    public function ListarUno(Request $request, $id){
        return Animal::findOrFail($id);
    }

    public function Eliminar(Request $request, $id){
        $animal = Animal::findOrFail($id);
        $animal -> delete();
        
        return [ "response" => "Object with ID $id deleted"];
    }
    public function Insertar(Request $request){

        $animalito = new Animal();

        $animalito -> nombre = $request ->post("nombre");
        $animalito -> cantidad_de_patas = $request ->post("patas");
        $animalito -> especie = $request ->post("especie");
        $animalito -> cola = $request ->post("cola");

        $animalito -> save();

        return $animalito;

       

    }
}
