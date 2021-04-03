<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

Auth::routes();

Route::get('/', [BlogController::class, 'show'])->name('show');
Route::get('/home', [BlogController::class, 'index'])->name('home');
Route::get('/create', [BlogController::class, 'create'])->name('create');
Route::post('/create', [BlogController::class, 'store'])->name('store');
Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [BlogController::class, 'update'])->name('update');
Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
