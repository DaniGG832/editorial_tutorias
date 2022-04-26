<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\MonografiaController;
use App\Models\Monografia;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/monografias/pruebas',[MonografiaController::class,'pruebas'])
    ->middleware(['auth','can:solo-admin']);

Route::resource('monografias',MonografiaController::class);

Route::resource('articulos',ArticuloController::class);

Route::resource('autores',AutorController::class)->parameters(['autores'=>'autor']);

