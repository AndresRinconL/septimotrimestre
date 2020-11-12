<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
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

//company
Route::get('company',[CompanyController::class,'index'])->name('company.index');
Route::get('company/create',[CompanyController::class,'create'])->name('company.create');

Route::post('company',[CompanyController::class,'store'])->name('company.store');
Route::delete('company/{id}',[CompanyController::class,'destroy'])->name('company.destroy');

Route::get('company/{id}/edit',[CompanyController::class,'edit'])->name('company.edit');
Route::patch('company/update/{id}',[CompanyController::class,'update'])->name('company.update');
Route::get('company/{id}',[CompanyController::class,'show'])->name('company.show');

//products
Route::get('product',[ProductController::class,'index'])->name('product.index');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');

Route::post('product',[ProductController::class,'store'])->name('product.store');
Route::delete('product/{id}',[ProductController::class,'destroy'])->name('product.destroy');

Route::get('product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::patch('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/{id}',[ProductController::class,'show'])->name('product.show');

//product_type
Route::get('product_type',[ProductTypeController::class,'index'])->name('product_type.index');
Route::get('product_type/create',[ProductTypeController::class,'create'])->name('product_type.create');

Route::post('product_type',[ProductTypeController::class,'store'])->name('product_type.store');
Route::delete('product_type/{id}',[ProductTypeController::class,'destroy'])->name('product_type.destroy');

Route::get('product_type/{id}/edit',[ProductTypeController::class,'edit'])->name('product_type.edit');
Route::patch('product_type/update/{id}',[ProductTypeController::class,'update'])->name('product_type.update');
Route::get('product_type/{id}',[ProductTypeController::class,'show'])->name('product_type.show');
