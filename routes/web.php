<?php

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

Route::get('/', [App\Http\Controllers\PortafolioController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//esta es la ruta que se encarga de mostrar la vista de los proyectos
// Route::get('/proyectos', [App\Http\Controllers\ProyectoController::class, 'index'])->name('proyectos.index');


Route::resource('/proyectos',App\Http\Controllers\ProyectoController::class);

//definimos la ruta para el controlador de la informacion
Route::resource('/information',App\Http\Controllers\InformationController::class);

//definimos la ruta de informacion personal
Route::resource('/informacion_personal',App\Http\Controllers\InformacionPersonalController::class);


//ruta de index
Route::resource('/indices',App\Http\Controllers\IndexController::class);

//ruta persona

//ruta descripciones
Route::resource('/descripciones',App\Http\Controllers\DescripcioneController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
