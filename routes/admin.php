<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        $users = User::all();
        return view('admin.index', compact('users'));
    })->name('dashboard');
    Route::get('suspended', [UserController::class, 'allTrashed'])->name('user.trash')->withTrashed();
    Route::post("/restore/{user}", [UserController::class, "restore"])->name('user.restore')->withTrashed();
    Route::resource('user', UserController::class)->except(['create', 'store', 'edit', 'update'])->withTrashed();
});
