<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    Route::get('', [App\Http\Controllers\Api\UserController::class, 'index']);
    Route::post('', [App\Http\Controllers\Api\UserController::class, 'store']);
    Route::get('{id}', [App\Http\Controllers\Api\UserController::class, 'show']);
    Route::put('{id}/update', [App\Http\Controllers\Api\UserController::class, 'update']);
    Route::delete('{id}', [App\Http\Controllers\Api\UserController::class, 'destroy']);
});
