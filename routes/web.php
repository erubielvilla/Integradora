<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('home');
    })->Middleware('auth'); 

//Ruta de inicio de sesion
Route::get('/login', [SessionsController::class, 'create'])
    ->Middleware('guest')    
    ->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->Middleware('auth')
    ->name('login.destroy');

//Ruta de registro
Route::get('/register', [RegisterController::class, 'create'])
    ->Middleware('guest')    
    ->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

//Ruta de libros
Route::resource('libro',App\Http\Controllers\LibroController::class);

//Ruta de usuarios
Route::resource('usuario',App\Http\Controllers\UsuariosController::class);

//Ruta de solicitud
Route::resource('Solicitud',App\Http\Controllers\SolicitudController::class);

