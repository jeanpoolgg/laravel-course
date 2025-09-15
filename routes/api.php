<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\QueriesController;
use Illuminate\Support\Facades\Route;


Route::get("/test", function(){
    return "El backend funciona correctamente";
});

Route::get("/backend", [BackendController::class, "getAll"]);

Route::get("/backend/{id?}", [BackendController::class, "get"]);

Route::post("/backend", [BackendController::class, "create"]);

Route::put("/backend/{id}", [BackendController::class, "update"]);

Route::delete("/backend/{id}", [BackendController::class, "delete"]);


Route::get("/query", [QueriesController::class, "get"]);
Route::get("/query/{id}", [QueriesController::class, "getById"]);
Route::get("/query/method/names", [QueriesController::class, "getNames"]);
Route::get("/query/method/search/{name}/{price}", [QueriesController::class, "searchName"]);
Route::get("/query/method/searchString/{value}", [QueriesController::class, "searchString"]);
Route::post("/query/method/advancedSearch", [QueriesController::class, "advancedSearch"]);
Route::get("/query/method/join", [QueriesController::class, "join"]);