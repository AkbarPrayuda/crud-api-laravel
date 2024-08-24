<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tokens/create', function (Request $request) {
      // Pastikan email yang dimasukkan valid dan ada di database
      $user = User::where('email', $request->email)->first();

      // Jika user tidak ditemukan, return response error
      if (!$user) {
          return response()->json(['error' => 'User not found'], 404);
      }

      // Membuat token jika user ditemukan
      $token = $user->createToken('token-name')->plainTextToken;

      return response()->json([
          'access_token' => $token,
          'token_type' => 'Bearer',
      ]);
});
