<?php

// app/Http/Controllers/Api/ResetPasswordController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{

    public function initiateReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(60);
        $user = User::where('email', $request->email)->first();

        $user->update([
            'remember_token' => $token
        ]);

        Mail::to($user->email)->send(new ResetPassword($token));

        return $user ? response()->json(['token' => $token, 'message' => 'Token generated successfully']) : response()->json(["message" => "404 User Not Found"]);
    }

    public function reset(Request $request, string $token)
    {
        if ($token) {
            $request->validate([
                "token" => "required",
                "password" => "required|min:8|confirmed",
            ]);

            $user = User::where('remember_token', $token)->first();

            if (!$user) {
                return response()->json(['message' => "Invalid or expired token"], 422);
            }

            $status = $user->update([
                "password" => Hash::make($request->password),
                "remember_token" => null
            ]);

            return $status ? response()->json([
                'message' => 'Password reset successfully',
            ]) : response()->json(['message' => "Password Failed to reset"]);
        } else {
            return response()->json(['message' => "Token Missing failed to reset password"]);
        }
    }
}
