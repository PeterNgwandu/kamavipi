<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('authentication.register');
    }

    public function store()
    {
        // Validate the Request
        $this->validate(request(), [
            'country' => 'required',
            'phone' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required|confirmed|min:6',
            'verification_code' => 'required|min:4'
        ]);

        // Create and save the users
        $user = User::create(request([
            'country',
            'phone',
            'fname',
            'lname',
            'password',
            'verification_code'
        ]));

        // Sign in the users
        auth()->login($user);

        session()->flash('message', 'You have registerd successful');

        // Redirect the users
        return redirect()->home();
    }

}
