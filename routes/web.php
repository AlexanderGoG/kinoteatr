<?php

use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class,'home']);

Route::get('/about', [MainController::class,'about']);

Route::get('/rules', [MainController::class,'rules']);

Route::get('/reviews', [MainController::class,'reviews']);
Route::post('/reviews/check', [MainController::class,'reviews_check']);
Route::get('/', [MainController::class,'film']);

Route::post('/check', [MainController::class,'home_check']);

