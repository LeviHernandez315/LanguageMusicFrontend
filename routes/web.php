<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Pagina Principal
Route::get('/', function () {
    return view('login');
})->name('login.index');

//Pagina Crear Usuario/
/*
Route::get('/sinup', function () {
    return view('sinup');
})->name('sinup.index');
*/

Route::get('/sinup', [UsuarioController::class, 'crearUsuario'])->name('usuario.crear');

/*

Route::get('/login', function () {
    return view('login');
})->name('login.index');
*/

//Rutas Para la vista de la musica
Route::get('/musica', [MusicaController::class, 'index'])->name('musica.index');
Route::post('/usuario/crear');


Route::get('/sam', function () {
    return view('samuel');
});