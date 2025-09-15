<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class QueriesController extends Controller
{
    public function get(){
        $products = Product::all();
        return response()->json($products);
    }
}
