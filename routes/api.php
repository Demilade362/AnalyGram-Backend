<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\AuthController as ApiAuthController;
use App\Http\Controllers\GoogleAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [ApiAuthController::class, 'login']);
Route::post("/register", [ApiAuthController::class, 'register']);
 
Route::get('/auth/callback', GoogleAuthController::class);

Route::post('/password/reset', [ResetPasswordController::class, 'initiateReset'])->name('password.reset.initiate');
Route::post('/password/reset/{token}', [ResetPasswordController::class, 'reset'])->name('password.reset');

Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout', [ApiAuthController::class, 'logout']);
    
    Route::get('/user', function (Request $request) {
        return response([
            "user" => $request->user()
        ], 200);
    });
});
