<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('authentication.login');
    }

    public function store()
    {
        // Attempt to authenticate the users
        if(!auth()->attempt(request(['phone', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Username or Password do not match, Please check your credentials and try again'
            ]);
        }
        // Redirect to the home page
        return redirect()->home();
    }

    public function destroy()
    {
        // Logout the signed in user
        auth()->logout();

        // Redirect the signed in user to the home page
        return redirect()->home();
    }
}
