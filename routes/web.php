<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('tasks.index')
        : redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

require __DIR__.'/auth.php';
