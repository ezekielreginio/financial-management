<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
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
        } 
 
        throw ValidationException::withMessages([
            'error_message' => ['Invalid User Credentials']
        ]);
    }
}
