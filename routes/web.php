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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
Route::get('/formIndex', [adminController::class,'formIndex'])->middleware(['auth'])->name('dashboard');
Route::get('/formprint/{id}', [adminController::class,'formprint'])->middleware(['auth'])->name('dashboard');
Route::post('/saveCustomer', [adminController::class,'saveCustomer'])->middleware(['auth'])->name('dashboard');

Route::get('/', [adminController::class,'formList'])->middleware(['auth'])->name('dashboard');
Route::get('/formListEdit/{id}', [adminController::class,'formListEdit'])->middleware(['auth'])->name('dashboard');
Route::get('/formListDelete/{id}', [adminController::class,'formListDelete'])->middleware(['auth'])->name('dashboard');
Route::post('/formListUpdate/{id}', [adminController::class,'formListUpdate'])->middleware(['auth'])->name('dashboard');
Route::post('/saveContribution/{id}', [adminController::class,'saveContribution'])->middleware(['auth'])->name('deleteRecord','dashboard');

Route::get('/formFullView/{id}', [adminController::class,'formFullView'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

