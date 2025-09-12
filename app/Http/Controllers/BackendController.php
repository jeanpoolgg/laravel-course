<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class BackendController extends Controller
{

    private $names = [
        1 => ["name" => "Ana", "age" => 30],
        2 => ["name" => "Héctor", "age" => 25],
        3 => ["name" => "Juan", "age" => 20],
    ];

    public function getAll(){
        return response()->json($this->names);
    }

    public function get(int $id = 0){
        if(isset($this->names[$id])){
            return response()->json($this->names[$id]);
        }

        return response()->json(["error" => "Nombre no existente"], Response::HTTP_NOT_FOUND);
    }

    public function create(Request $request){
        $person = [
            "id" => count($this->names) + 1,
            "name" => $request->input("name"),
            "age" => $request->input("age")
        ];

        $this->names[$person["id"]] = $person;

        return response()->json(["message" => "Persona creada", "person" => $person], Response::HTTP_CREATED);
    }
}
