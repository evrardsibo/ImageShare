<?php

use App\Http\Controllers\BuildController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[BuildController::class,'index'])->name('home');//route name
Route::post('/build',[BuildController::class,'build'])->name('build');
Route::get('/build',[BuildController::class,'build'])->name('build');
Route::get('/detail/{$id}',[BuildController::class,'detail'])->whereNumber('id');
Route::get('/details',[BuildController::class,'detail1']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
