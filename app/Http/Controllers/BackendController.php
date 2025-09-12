<?php

namespace App\Http\Controllers;
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
        return response()->json([
            "id" => $id,
            "success" => true,
            "message" => "Hola"
        ]);
    }
}
