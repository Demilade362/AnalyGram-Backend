<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController as ApiAuthController;

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

Route::post('/login', [ApiAuthController ::class, 'login']);
Route::post("/register", [ApiAuthController::class, 'register']);
Route::post('/forgot', [ApiAuthController::class, 'forgotPassword']);



Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout', [ApiAuthController::class, 'logout']);
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
