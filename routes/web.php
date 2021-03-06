<?php

use App\Http\Controllers\BuildController;
use App\Http\Controllers\CommentController;
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
Route::get('/build',[BuildController::class,'create'])->name('build.create');
Route::post('/build',[BuildController::class,'store'])->name('build.store');
Route::post('/build',[CommentController::class,'store'])->name('build.store');
Route::get('/detail/{id}',[BuildController::class,'detail'])->name('detail.detail');
Route::get('/user',[BuildController::class,'user'])->name('user');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
