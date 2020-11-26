<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocalidadController;



// [GENERAR RUTAS] = Route::resource('localidad', 'LocalidadController');
// php artisan route:cache - php artisan route:list



Route::get('/', function () {
    return view('welcome');
});
Route::get('escritorio',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('perfil',[DashboardController::class,'perfil'])->name('dashboard.perfil');



Route::get('login',[LoginController::class,'form_login'])->name('login.form_login');
Route::post('auth',[LoginController::class,'auth'])->name('login.auth');


Route::get('localidad',[LocalidadController::class,'index'])->name('localidad.index');
Route::get('localidad/create',[LocalidadController::class,'create'])->name('localidad.create');
Route::post('localidad',[LocalidadController::class,'store'])->name('localidad.store');
Route::delete('localidad/{id}',[LocalidadController::class,'destroy'])->name('localidad.destroy');
Route::get('localidad/{id}/edit',[LocalidadController::class,'edit'])->name('localidad.edit');
Route::patch('localidad/update/{id}',[LocalidadController::class,'update'])->name('localidad.update');
Route::get('localidad/{id}',[LocalidadController::class,'show'])->name('localidad.show');





