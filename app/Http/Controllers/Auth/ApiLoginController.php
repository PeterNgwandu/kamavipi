<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiLoginController extends Controller
{
    public function login(Request $request)
    {
          $request->validate([
              'phone' => 'required',
              'password' => 'required',
          ]);

          $credentials = request(['phone', 'password']);
          if(!Auth::attempt($credentials)){
              return response()->json([
                  'message' => 'Unauthorized'
              ], 401);
          }

          $user = $request->user();
          $tokenResult = $user->createToken('Personal Access Token');
          $token = $tokenResult->token;

          if ($request->remember_me)
              $token->expires_at = Carbon::now()->addWeeks(1);
          $token->save();

          return response()->json([
              'access_token' => $tokenResult->accessToken,
              'token_type' => 'Bearer',
              'expires_at' => Carbon::parse(
                  $tokenResult->token->expires_at
              )->toDateTimeString()
          ]);
    }
}
