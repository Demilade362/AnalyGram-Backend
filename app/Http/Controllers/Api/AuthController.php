<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
        $request->validated();

        $user = User::where('email', $request->email)->first();
 
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response([
            "user" => $user,
            "token" => $user->createToken($request->email)->plainTextToken
        ], 200);

    }

    public function register(RegisterRequest $request){
        $request->validated();

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make('password')
        ]);

        return response([
            'user' => $user,
            'token' => $user->createToken($request->device_name)->plainTextToken
        ], 200);
    }

    public function logout(Request $request){
        auth()->logout();
        $request->user()->tokens()->delete();
    }

    public function forgotPassword(){
        
    }
}
