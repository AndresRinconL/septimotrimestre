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

Route::get('/', function () {
    return view('welcome');
});

route::get('/inicio',[\App\Http\Controllers\LandingController::class,'index'])->name('landing.index');
route::get('/acercade',[\App\Http\Controllers\LandingController::class,'acercade'])->name('landing.acercade');
route::get('/contacto',[\App\Http\Controllers\LandingController::class,'contacto'])->name('landing.contacto');
route::get('/servicios',[\App\Http\Controllers\LandingController::class,'servicios'])->name('landing.servicios');
