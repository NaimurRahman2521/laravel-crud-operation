<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('product.add');
Route::post('/crud/create-product',[HomeController::class,'create'])->name('product.create');
Route::get('/crud/manage-product',[HomeController::class,'manage'])->name('product.manage');
Route::get('/crud/edit/{id}',[HomeController::class, 'edit'])->name('product.edit');
Route::post('/crud/update/{id}',[HomeController::class, 'update'])->name('product.update');
Route::get('/crud/delete/{id}',[HomeController::class, 'delete'])->name('product.delete');
