<?php

use App\Http\Controllers\UserController;
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
Route::middleware([\App\Http\Middleware\Locale::class])->group(function () {
    Route::get('/', [UserController::class,'index'])->name('index');
    Route::get('/news', [UserController::class,'news'])->name('news');

});



Route::get('/uz', [UserController::class,'uz_lang'])->name('uz');
Route::get('/ru', [UserController::class,'ru_lang'])->name('ru');
Route::get('/en', [UserController::class,'en_lang'])->name('en');


