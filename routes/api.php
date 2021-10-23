<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FaqController;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| API Unprotected Routes
|--------------------------------------------------------------------------
*/
//Auth unprotected routes
Route::prefix('/auth')->group(function() {
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout']);   
});

//Admin unprotected routes
Route::prefix('/admins')->group(function() {
    Route::post('/register', [AdminController::class, 'register']);
});

//FAQ unprotected routes
Route::prefix('/faqs')->group(function() {
    Route::get('/read', [FaqController::class, 'read']);
});


/*
|--------------------------------------------------------------------------
| API Protected Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth:api')->group(function () {
    //Admins API routes
    Route::prefix('/admins')->group(function() {
        Route::get('/read', [AdminController::class, 'retrieve']);
        Route::put('/update', [AdminController::class, 'update']);
        Route::put('/change_password', [AdminController::class, 'changePassword']);
    });
    
    //FAQ API routes
    Route::prefix('/faqs')->group(function() {
        Route::post('/insert', [FaqController::class, 'insert']);
        Route::put('/update/{id}', [FaqController::class, 'update']);
        Route::delete('/delete/{id}', [FaqController::class, 'delete']);
    });
});
