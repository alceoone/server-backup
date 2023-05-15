<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AssetsController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/user-list', UserController::class); 
Route::resource('/application', AppsController::class); 
Route::resource('/category', CategoryController::class); 
Route::resource('/assets', AssetsController::class); 
