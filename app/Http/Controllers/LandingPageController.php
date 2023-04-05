<?php

namespace App\Http\Controllers;

use Exception;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\{ Auth, Cookie };

class LandingPageController extends Controller
{
    /**
     * Returns the landing page view
     *
     * @return View
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function index()
    {
        try {
            $token = Cookie::get('user_token');
            JWTAuth::setToken($token)->toUser();

            if (Auth::check()) {
                return view('dashboard.index');
            }
        } catch (Exception $e) {
            return view('welcome');
        }
    }
}
