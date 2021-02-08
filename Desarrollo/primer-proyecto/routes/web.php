<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Estudiantecontroller;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\Programacontroller;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LandingController;
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
Route::resource('principal',LandingController::class);

Route::resource('Estudiante',Estudiantecontroller::class);

Route::resource('Ficha',FichaController::class);
Route::get('Ficha/restore/{idFicha}',[FichaController::class,'restore']);
//Route::resource('Jornada',JornadaController::class);
Route::resource('Programaformacion',Programacontroller::class);

Route::resource('Instructor',InstructorController::class);
Route::get('Instructor/restore/{idInstructor}',[InstructorController::class,'restore']);

