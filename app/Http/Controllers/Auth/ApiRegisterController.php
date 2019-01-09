<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;

class ApiRegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the Request
        $this->validate(request(), [
            'country' => 'required',
            'phone' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required|confirmed|min:6',
            'verification_code' => 'required|min:4',
        ]);

        // Create and save the users
        $user = User::create(request([
            'country',
            'phone',
            'fname',
            'lname',
            'password',
            'verification_code',
        ]));

        // Sign in the users
        //auth()->login($user);

        // if (!$user) {
        //    return response()->json(['error' => 'Registration fail, pleae try again']);
        // }

        return $user;
    }
}
