<?php

namespace App\Http\Controllers\API;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::attempt([
            'phone' => request('phone'),
            'password' => request('password')
          ]))
        {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], $this->successStatus);
        }else {
            return response()->json(['errors' => 'unauthorised']);
        }
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'country' => 'required',
          'phone' => 'required',
          'fname' => 'required',
          'lname' => 'required',
          'password' => 'required|min:6',
          'c_password' => 'required|min:6|same:password',
          'verification_code' => 'required|min:4'
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors' => $validotor->errors()], 401);
        }

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['phone'] = $user->phone;
        $success['fname'] = $user->fname;

        return response()->json(['success' => $success], $this->successStatus);
    }
}
