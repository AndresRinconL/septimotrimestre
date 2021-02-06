<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\vehiculoscontroller;
use App\Http\Controllers\landingcontroller;
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
    return view('index');
});

//rutas Principales
route::get( 'inicio',[LandingController::class,'inicio'])->name('user.index');
route::get( 'inicio',[LandingController::class,'inicio'])->name('principal.inicio');
route::get('vehiculo',[LandingController::class,'vehiculo'])->name('vehiculo.index');
route::get('user',[LandingController::class,'user'])->name('vehiculo.index');
route::get('informe',[landingcontroller::class,'informe'])->name('principal.informe');



//rutas vehiculares
Route::get('vehiculo',[vehiculoscontroller::class,'index'])->name('vehiculo.index');
Route::get('vehiculo/create',[vehiculoscontroller::class,'create'])->name('vehiculo.create');
Route::post('vehiculo',[vehiculoscontroller::class,'store'])->name('vehiculo.store');
Route::get('vehiculo/{id}',[vehiculoscontroller::class,'show'])->name('vehiculo.show');
Route::delete('vehiculo/{id}',[vehiculoscontroller::class,'destroy'])->name('vehiculo.destroy');
Route::get('vehiculo/edit/{id}',[vehiculoscontroller::class,'edit'])->name('vehiculo.edit');
Route::put('vehiculo/{id}',[vehiculoscontroller::class,'update'])->name('vehiculo.update');

//rutas usuario
Route::get('user',[usercontroller::class,'index'])->name('user.index');
Route::get('user/create',[usercontroller::class,'create'])->name('user.create');
Route::post('user',[usercontroller::class,'store'])->name('user.store');
Route::get('user/{id}',[usercontroller::class,'show'])->name('user.show');
Route::delete('user/{id}',[usercontroller::class,'destroy'])->name('user.destroy');
Route::get('user/edit/{id}',[usercontroller::class,'edit'])->name('user.edit');
Route::put('user/{id}',[usercontroller::class,'update'])->name('user.update');

//rutas conductor

Route::get('conductor',[usercontroller::class,'index'])->name('Conductor.index');
Route::get('conductor/create',[usercontroller::class,'create'])->name('Conductor.create');
Route::post('conductor',[usercontroller::class,'store'])->name('conductor.store');
Route::get('conductor/{id}',[usercontroller::class,'show'])->name('Conductor.show');
Route::delete('conductor/{id}',[usercontroller::class,'destroy'])->name('conductor.destroy');
Route::get('conductor/edit/{id}',[usercontroller::class,'edit'])->name('Conductor.edit');
Route::put('conductor/{id}',[usercontroller::class,'update'])->name('conductor.update');
