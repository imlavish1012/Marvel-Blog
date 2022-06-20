<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\postcontroller;

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

Route::get('/',[pagescontroller::class, 'index']);

Route::resource('/blog', postcontroller::class);
Auth::routes();

Route::get('/', [\App\Http\Controllers\pagescontroller::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/char',[App\Http\Controllers\pagescontroller::class, 'char'])->name('char');
Route::get('/comics',[App\Http\Controllers\pagescontroller::class, 'comics'])->name('comics');
Route::get('/movies',[App\Http\Controllers\pagescontroller::class, 'movies'])->name('movies');
Route::get('/webShows',[App\Http\Controllers\pagescontroller::class, 'webShows'])->name('webShows');
