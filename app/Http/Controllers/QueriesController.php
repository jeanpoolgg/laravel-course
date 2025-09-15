<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;

class QueriesController extends Controller
{
    public function get(){
        $products = Product::all();
        return response()->json($products);
    }

    public function getById(int $id){
        $product = Product::find($id);

        if(!$product){
            return response()->json(["message" => "Producto no encontrado"], Response::HTTP_NOT_FOUND);
        }

        return response()->json($product);
    }

    public function getNames(){
        $products = Product::select("name")->orderBy("name", "desc")->get();
        return response()->json($products);
    }
}
