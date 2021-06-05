<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;

/**
 * Auth Route
 */
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});

/**
 * Products Route
 */
Route::group([
    'middleware' => 'api',
    'prefix' => 'products'

], function ($router) {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/home-products', [HomeController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::post('/{product}/favorite', [FavoriteController::class, 'favoriteProduct']);
    /**
     * Comments Route
     */

    Route::get('/{product}/comments', [CommentController::class, 'index']);
    Route::get('/{product}/comments/{id}', [CommentController::class, 'show']);
    Route::post('/{product}/comments', [CommentController::class, 'create']);
    
    Route::post('/{product}/comments/{comment}/favorite', [FavoriteController::class, 'favoriteComment']);
});

/**
 * Categories Route
 */
Route::group([
    'middleware' => 'api',
    'prefix' => 'categories'

], function ($router) {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'show']);
});


/**
 * User Route
 */
Route::group([
    'middleware' => 'api',
    'prefix' => 'user'

], function ($router) {
    Route::get('/user-profile', [UserController::class, 'show']);    
});
