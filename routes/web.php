<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [MainController::class,'posts'])->name('home');
Route::get('/add_post', [MainController::class,'add_post'])->name('add_post');
Route::post('/add_post', [MainController::class,'add']);
Route::get('/review', [MainController::class,'review'])->name('review');
Route::get('/review/{id}', [MainController::class,'showOne'])->name('showOne');
