<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/musica', [MusicaController::class, 'index'])->name('musica.index');
Route::post('/usuario/crear');


Route::get('/sam', function () {
    return view('samuel');
});

Route::get('/login', function () {
    return view('login');
})->name('login.index');

Route::get('/sinup', function () {
    return view('sinup');
})->name('sinup.index');;