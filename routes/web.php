<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\PrivacyPolicyController;

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
Route::get('/app-ads.txt', function () {
    return "google.com, pub-6919850560329079, DIRECT, f08c47fec0942fa0";
});

Route::get('/{appKey}/privacy-policy', [App\Http\Controllers\PrivacyPolicyController::class, 'index']);
// Route::domain('{sub}.'. env('APP_URL'))->group(function () {
//     Route::get('/privacy-policy', function ($sub) {
//         // return view('privacy-policy');
//         return 'User ' . $sub ;
//     });
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/user-list', UserController::class); 
Route::resource('/application', AppsController::class); 
Route::resource('/category', CategoryController::class); 
Route::resource('/assets', AssetsController::class); 
