<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/book', [BookController::class, 'index'])->name('index');

Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/store', [BookController::class, 'store'])->name('store');
Route::get('/timkiem', [BookController::class, 'timkiem'])->name('timkiem');
