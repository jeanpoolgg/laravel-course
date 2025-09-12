<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;


Route::get("/test", function(){
    return "El backend funciona correctamente";
});

Route::get("/backend", [BackendController::class, "get"]);
