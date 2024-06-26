<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::resource('/productos',ProductoController::class);
Route::resource('/empleados', EmpleadoController::class);


Route::resource('/clientes', ClienteController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
