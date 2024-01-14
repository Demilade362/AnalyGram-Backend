<?php 

// app/Http/Controllers/Api/ResetPasswordController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function initiateReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(60);
        
        User::where('email', $request->email)->update(['reset_token' => $token]);
        
        return response()->json(['token' => $token, 'message' => 'Token generated successfully']);
    }

    public function reset(Request $request, $token)
    {

        $user = User::where('reset_token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid or expired token'], 422);
        }

        $user->update([
            'password' => Hash::make($request->password),
            'reset_token' => null,
        ]);
        
        return response()->json(['message' => 'Password reset successfully']);
    }
}
