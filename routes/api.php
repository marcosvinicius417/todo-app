<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TaskApiController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::apiResource('tasks', TaskApiController::class);
});