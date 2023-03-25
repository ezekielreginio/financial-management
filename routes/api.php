<?php

use App\Http\Controllers\AccountGroupController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UsersController::class, 'register']);

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [UsersController::class, 'login']);
    Route::post('logout', [UsersController::class, 'logout']);
    Route::post('me', [UsersController::class, 'me']);
});

Route::group(['middleware' => ['api.auth']], function () {
    Route::group(['prefix' => 'account-group'], function () {
        Route::post('/', [AccountGroupController::class, 'store']);
    });
});



