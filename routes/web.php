<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\NotificationsController;
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
Route::get('/', [HomeController::class, 'home'])->name('homePage');
Route::get('/coming-soon', [HomeController::class, 'comingSoon'])->name('comingSoonPage');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacyPage');
Route::get('/terms', [HomeController::class, 'terms'])->name('tosPage');

Route::get('/account/login', [AuthController::class, 'login'])->name('loginPage');
Route::get('/account/logout', [AuthController::class, 'logout'])->name('logoutPage');
Route::get('/account/signup', [AuthController::class, 'signup'])->name('signupPage');
Route::get('/account/forget', [AuthController::class, 'forget'])->name('forgetPasswordPage');
Route::get('/account/verify', [AuthController::class, 'verify'])->name('verifyEmailPage');
Route::get('/account/unsubscribe', [AuthController::class, 'unsubscribe'])->name('unsubscribePage');

/** Explore Course */
Route::get('/course/explore/{courseTag}', [CoursesController::class, 'explore'])->name('exploreCourse');

// Socialite (Social Login)
Route::get('/account/login/{provider}', [AuthController::class, 'socialLogin'])->name('socialLogin');
Route::get('/account/login/{provider}/callback', [AuthController::class, 'socialLoginCallback'])->name('socialLoginCallback');

Route::group(['middleware' => 'auth:web'], function () {
    /** Account page */
//    Route::get('/account', [AuthController::class, 'viewAccount'])->name('accountPage');
    Route::get('/account/{userName?}', [AuthController::class, 'viewAccount'])->name('accountPage');

    /** Notifications page */
    Route::get('/notifications', [NotificationsController::class, 'list'])->name('notificationsPage');

    /** Enroll page */
    Route::get('/enroll/{courseTag}', [EnrollController::class, 'enroll'])
        ->middleware('resolve_entities')
        ->name('enrollPage');
    Route::get('/enroll/{courseTag}/{step}', [EnrollController::class, 'step'])
        ->middleware('resolve_entities')
        ->name('enrollStep');

    /** Courses page */
    Route::get('/enrolls', [CoursesController::class, 'listCourses'])->name('getEnrolls');

    /** Lesson page */
    Route::get('/course/{courseTag}/lesson/{lessonTag}', [LessonController::class, 'getLesson'])
        ->middleware(['resolve_entities'])
        ->name('getLesson');
});