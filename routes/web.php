<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController; // Aquí corregimos la capitalización
use App\Http\Controllers\ProductoController; // Aquí corregimos la capitalización

Route::get('/', function () {
    return view('welcome');
});

Route::get("/Registro",[RegistroController::class, 'Registro']);
Route::get("/Producto", [ProductoController::class, 'Producto']);
