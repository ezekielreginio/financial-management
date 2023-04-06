<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('finance-management')->group(function () {
    Route::get('/', [LandingPageController::class, 'index']);
    Route::group(['middleware' => ['isAuthorized']], function () {
        Route::get('/dashboard', function () {
            return view('dashboard.index');
        });
    });
    Route::get('/accounts', function () {
        return view('accounts.index');
    });
});
