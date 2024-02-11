<?php
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleAuthController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function(){
    
    $googleUser = Socialite::driver('google')->user();

    $user = User::updateOrCreate([
        'id' => $googleUser->id
    ], [
        'name' => $googleUser->name,
        'email' => $googleUser->email
    ]);

    $token = $user->createToken($user->email);

    return response([
        "data" => [
            "user" => $user,
            "token" => $token->plainTextToken
        ]
    ]);
});

Auth::routes([
    "register" => false,
    'reset' => false,
]);
