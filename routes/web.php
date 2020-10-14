<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController ;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PagesController::class,'index'])->name('pages.index');

Route::get('/about',[PagesController::class,'about'])->name('pages.about');

Route::get('/services',[PagesController::class,'services'])->name('pages.services');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts',App\Http\Controllers\PostController::class);
