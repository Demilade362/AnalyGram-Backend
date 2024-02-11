<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
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
    }
}
