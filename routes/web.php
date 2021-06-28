<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
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



//Route::resource('suppliers', SupplierController::class);
Route::get("supplier/",[SupplierController::class,'index'])->name('index');
//Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get("supplier/create",[SupplierController::class,'create'])->name('create');
Route::post("supplier/store",[SupplierController::class,'store'])->name('store');
Route::delete("supplier/destroy/{id}",[SupplierController::class,'destroy'])->name('destroy');
Route::get("supplier/editView/{id}",[SupplierController::class,'editView'])->name('editView');
Route::patch("supplier/edit/{id}",[SupplierController::class,'edit'])->name('edit');

Route::get("supplier/show/{id}",[SupplierController::class,'show'])->name('show');




Route::get('/', function () {
    return view('welcome');
});
