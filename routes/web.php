<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return UserResource::collection(User::all());
});
Route::get('/user/{id}', function (string $id) {
    return new UserResource(User::findOrFail($id));
});
Route::post('/user', function(Request $request) {

});
