<?php

use App\Http\Controllers\Api\EmailSubscriptionController;
use App\Http\Controllers\Api\TranslationsController;
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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/translations/{locale}', [TranslationsController::class, 'get'])->name('getTranslation');

Route::post('/newsletter/subscribe', [EmailSubscriptionController::class, 'subscribe'])
    ->middleware('throttle:3,1') // three times per 1 minute
    ->middleware('recaptcha')
    ->name('subscribe');
Route::delete('/newsletter/unsubscribe', [EmailSubscriptionController::class, 'unsubscribe'])
    ->middleware('throttle:3,1') // three times per 1 minute
    ->name('unsubscribe');
