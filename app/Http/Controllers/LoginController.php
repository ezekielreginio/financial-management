<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use PHPUnit\Util\Xml\ValidationResult;

class LoginController extends Controller
{
    public function test()
    {
        return response()->json(['test' => 'hello world!']);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($request->only('email', 'password'))) {
            $token = $request->user()->createToken('authToken');
            return response()->json(["access_token" => $token->plainTextToken, "token_type" => 'Bearer']);
            // return view('index');
        } 
 
        throw ValidationException::withMessages([
            'error_message' => ['Invalid User Credentials']
        ]);
    }
}
