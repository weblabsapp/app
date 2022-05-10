<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Socialite\Facades\Socialite;

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

// Coming soon
Route::get('/', [HomeController::class, 'index']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/terms', [HomeController::class, 'terms']);

Route::get('/account/login', [AuthController::class, 'login'])->name('loginPage');
Route::get('/account/logout', [AuthController::class, 'logout'])->name('logoutPage');
Route::get('/account/signup', [AuthController::class, 'signup'])->name('signupPage');
Route::get('/account/forget', [AuthController::class, 'forget'])->name('forgetPasswordPage');
Route::get('/account/verify', [AuthController::class, 'verify'])->name('verifyEmailPage');
Route::get('/account/unsubscribe', [AuthController::class, 'unsubscribe'])->name('unsubscribePage');

// Socialite (Social Login)
Route::get('/account/login/{provider}', [AuthController::class, 'socialLogin'])->name('socialLogin');
Route::get('/account/login/{provider}/callback', [AuthController::class, 'socialLoginCallback'])->name('socialLoginCallback');

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/account', [AuthController::class, 'myAccount'])->name('myAccountPage');
});
