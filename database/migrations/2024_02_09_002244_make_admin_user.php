<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $user = User::where('name', 'admin')->first();
        if(!$user){
            User::create([
                'name' => 'admin',
                'email' => "admin@admin.com",
                "password" => Hash::make("adminpassword"),
                "role" => true
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $user = User::where('name', 'admin')->first();
        $user->delete();
        $user->forceDelete();
    }
};
