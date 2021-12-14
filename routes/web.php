<?php

use App\Http\Controllers\LibrosControl;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\LibrosControl::class, 'home'])->name('home');

Route::get('/index', [App\Http\Controllers\LibrosControl::class, 'index'])->name('libros.index');

Route::get('/mostrar/{libro}/mostrar', [App\Http\Controllers\LibrosControl::class, 'mostrar'])->name('libros.mostrar');

Route::get('/agregar', [App\Http\Controllers\LibrosControl::class, 'agregar'])->name('libros.agregar');

Route::post('/registro', [App\Http\Controllers\LibrosControl::class, 'store'])->name('libros.store');

Route::get('/actualizar/{libro}/actualizar', [App\Http\Controllers\LibrosControl::class, 'actualizar'])->name('libros.actualizar');

Route::put('/index/{libro}', [App\Http\Controllers\LibrosControl::class, 'update'])->name('libros.update');

Route::delete('/index/{libro}', [App\Http\Controllers\LibrosControl::class, 'eliminar'])->name('libros.eliminar');
