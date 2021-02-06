<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Estudiantecontroller;
use App\Http\Controllers\fichacontroller;
use App\Http\Controllers\programacontroller;
use App\Http\Controllers\InstructorController;
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
Route::resources('estudiante',Estudiantecontroller::class);
Route::resources('estudiante',fichacontroller::class);
Route::resources('estudiante',InstructorController::class);
Route::resources('estudiante',programacontroller::class);
