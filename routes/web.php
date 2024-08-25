<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', [App\Http\Controllers\Api\UserController::class, 'index']);

Route::get('/user/{id}', [App\Http\Controllers\Api\UserController::class, 'show']);
Route::post('/user', function(Request $request) {

});
