<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\CloudController;
use App\Http\Controllers\Api\EmailSubscriptionController;
use App\Http\Controllers\Api\EnrollController;
use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Api\AssistantAIController;
use App\Http\Controllers\Api\SandboxController;
use App\Http\Controllers\Api\TranslationsController;
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


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/translations/{locale}', [TranslationsController::class, 'get'])
    ->name('getTranslation');

Route::post('/newsletter/subscribe', [EmailSubscriptionController::class, 'subscribe'])
    ->middleware('throttle:3,1') // three times per 1 minute
    ->middleware('recaptcha')
    ->name('subscribe');

Route::delete('/newsletter/unsubscribe', [EmailSubscriptionController::class, 'unsubscribe'])
    ->middleware('throttle:3,1') // three times per 1 minute
    ->name('unsubscribe');

Route::post('/account/signup', [AccountController::class, 'signup'])
    ->middleware('throttle:3,1') // three times per 1 minute
    ->middleware('recaptcha')
    ->name('signup');

Route::post('/account/login', [AccountController::class, 'login'])
    ->middleware('throttle:3,1') // three times per 1 minute
    ->middleware('recaptcha')
    ->name('login');

Route::post('/account/verify/resend', [AccountController::class, 'resendVerificationEmail'])
    ->middleware('throttle:1,1') // one time per 1 minute
    ->name('resendVerifyEmail');

Route::post('/sandbox/create/{courseTag}', [SandboxController::class, 'create'])
    ->middleware(['auth', 'throttle:1,1', 'resolve_entities']) // one time per 1 minute
    ->name('createSandbox');

Route::get('/sandbox/{courseTag}/id', [SandboxController::class, 'getId'])
    ->middleware(['auth', 'throttle:1,1']) // one time per 1 minute
    ->name('getSandboxName');

Route::post('/sandbox/{sandboxId}/run', [SandboxController::class, 'runCode'])
    ->middleware(['auth', 'throttle:60,1']) // 30 times per 1 minute
    ->name('runCode');

Route::post('/cloud/upload', [CloudController::class, 'uploadLessonFile'])
    ->middleware(['auth', 'throttle:10,1', 'resolve_entities']) // 10 times per 1 minute
    ->name('cloudUploadLessonFile');

Route::get('/cloud/{prefix}/{courseTag}/{lessonTag}/files', [CloudController::class, 'listLessonFiles'])
    ->middleware(['auth', 'throttle:60,1', 'resolve_entities']) // 60 times per 1 minute
    ->name('cloudListLessonFiles');

Route::get('/cloud/{prefix}/{courseTag}/{lessonTag}/{fileName}', [CloudController::class, 'getLessonFile'])
    ->middleware(['auth', 'throttle:60,1', 'resolve_entities']) // 60 times per 1 minute
    ->name('cloudGetLessonFile');

Route::delete('/cloud/{courseTag}/{lessonTag}/{fileName}', [CloudController::class, 'deleteLessonFile'])
    ->middleware(['auth', 'throttle:10,1', 'resolve_entities']) // 2 times per 1 minute
    ->name('cloudDeleteLessonFile');

Route::post('/course/{courseTag}/lesson/{lessonTag}/complete', [LessonController::class, 'markAsCompleted'])
    ->middleware(['auth', 'throttle:5,1', 'resolve_entities'])
    ->name('markLessonAsCompleted');

Route::delete('/course/{courseTag}/disenroll', [EnrollController::class, 'disEnroll'])
    ->middleware(['auth', 'throttle:1,1', 'resolve_entities'])
    ->name('disEnrollCourse');

Route::put('/account/profile/{attribute}', [AccountController::class, 'updateAttribute'])
    ->middleware(['auth', 'throttle:20,1', 'can:edit-profile-attributes'])
    ->name('updateProfileAttribute');

Route::post('/account/social-profiles', [AccountController::class, 'updateSocialProfiles'])
    ->middleware(['auth', 'throttle:10,1', 'can:edit-social-profiles'])
    ->name('saveSocialProfiles');

Route::post('/account/avatar', [AccountController::class, 'updateAvatar'])
    ->middleware(['auth', 'throttle:5,1', 'can:update-avatar'])
    ->name('updateAvatar');

Route::post('/assistant/send', [AssistantAIController::class, 'send'])
    ->middleware(['auth', 'throttle:1,1'])
    ->name('askAIAssistant');
