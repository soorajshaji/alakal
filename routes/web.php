<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\adminController;

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

Route::get('/formIndex', [adminController::class,'formIndex']);
Route::get('/formprint/{id}', [adminController::class,'formprint']);
Route::post('/saveCustomer', [adminController::class,'saveCustomer']);

Route::get('/', [adminController::class,'formList']);
Route::get('/formListEdit/{id}', [adminController::class,'formListEdit']);
Route::get('/formListDelete/{id}', [adminController::class,'formListDelete']);
Route::post('/formListUpdate/{id}', [adminController::class,'formListUpdate']);

Route::get('/formFullView/{id}', [adminController::class,'formFullView']);