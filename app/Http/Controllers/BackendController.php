<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;

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
}
