<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContentWallpaperController;
use App\Http\Controllers\Api\WallV2Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/{key}/', [App\Http\Controllers\Api\ContentWallpaperController::class, 'index']);
// Route::get('/{key}/new', [App\Http\Controllers\Api\ContentWallpaperController::class, 'new']);
// Route::get('/{key}/category', [App\Http\Controllers\Api\ContentWallpaperController::class, 'category']);
// Route::get('/{key}/category/{id}', [App\Http\Controllers\Api\ContentWallpaperController::class, 'categoryId']);

Route::group(['prefix' => 'v1'], function () {
    Route::get('/{key}/', [App\Http\Controllers\Api\ContentWallpaperController::class, 'index']);
    Route::get('/{key}/new', [App\Http\Controllers\Api\ContentWallpaperController::class, 'new']);
    Route::get('/{key}/category', [App\Http\Controllers\Api\ContentWallpaperController::class, 'category']);
    Route::get('/{key}/category/{id}', [App\Http\Controllers\Api\ContentWallpaperController::class, 'categoryId']);  
    Route::get('/{appKey}/privacy-policy', [App\Http\Controllers\Api\ContentWallpaperController::class, 'privacyPolicy']);
    Route::get('/{appKey}/deskripsi', [App\Http\Controllers\Api\ContentWallpaperController::class, 'deskripsi']);
});

Route::group(['prefix' => 'device'], function () {
    Route::get('/{device}', [App\Http\Controllers\Device\CekDeviceController::class, 'cek']);
});

Route::group(['prefix' => 'v2'], function () {
    Route::get('/{key}/', [App\Http\Controllers\Api\WallV2Controller::class, 'index']);
    // Route::get('/{key}/new', [App\Http\Controllers\Api\ContentWallpaperController::class, 'new']);
    // Route::get('/{key}/category', [App\Http\Controllers\Api\ContentWallpaperController::class, 'category']);
    // Route::get('/{key}/category/{id}', [App\Http\Controllers\Api\ContentWallpaperController::class, 'categoryId']);  
    // Route::get('/{appKey}/privacy-policy', [App\Http\Controllers\Api\ContentWallpaperController::class, 'privacyPolicy']);
    // Route::get('/{appKey}/deskripsi', [App\Http\Controllers\Api\ContentWallpaperController::class, 'deskripsi']);
});
