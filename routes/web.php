<?php

use App\Http\Controllers\WartegController;


Route::resource('warteg', WartegController::class);


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

Route::get('/', [WartegController::class, 'index']);
Route::resource('warteg', WartegController::class);

