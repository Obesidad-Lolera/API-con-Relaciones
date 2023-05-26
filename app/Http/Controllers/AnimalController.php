<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;

class AnimalController extends Controller
{

    public function Listar(Request $request){
        return view("animales",[
            "animales" => Animal::all()
        ]);
    }

    public function Eliminar(Request $request){
        $animal = Animal::find($request -> id);
        $animal -> delete();

        return redirect("/animal")->With("eliminado",true);
                



    }
    public function Insertar(Request $request){

        $animalito = new Animal();

        $animalito -> nombre = $request ->post("nombre");
        $animalito -> cantidad_de_patas = $request ->post("patas");
        $animalito -> especie = $request ->post("especie");
        $animalito -> cola = $request ->post("cola");

        $animalito -> save();

        return redirect("/animal")->With("creado",true);

       

    }
}
