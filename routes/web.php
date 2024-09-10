<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('create',[WorkController::class,'create'])->name('create');

Route::post('index',[WorkController::class,'store'])->name('store');

Route::get('index',[WorkController::class,'index'])->name('index');

Route::get('edit/{id}', [WorkController::class, 'edit'])->name('edit');

Route::put('update/{id}', [WorkController::class, 'update'])->name('update');

Route::get('delete/{id}', [WorkController::class, 'delete'])->name('delete');
