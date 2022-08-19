<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Lesson;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', get_route('web.homePage'));
});

Breadcrumbs::for('courses', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Courses', get_route('web.getEnrolls'));
});

Breadcrumbs::for('my-account', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('My Account', get_route('web.myAccountPage'));
});

Breadcrumbs::for('notifications', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Notifications', get_route('web.notificationsPage'));
});

Breadcrumbs::for('enroll', function (BreadcrumbTrail $trail, $courseTag) {
    $trail->parent('courses');
    $trail->push(sprintf('Enroll in %s', $courseTag), get_route('web.enrollPage', ['courseTag' => $courseTag]));
});

// Courses
Breadcrumbs::for('lesson', function (BreadcrumbTrail $trail, Lesson $lesson) {
    $trail->parent('courses');
    $trail
        ->push($lesson->course->title)
        ->push($lesson->topic->title)
        ->push($lesson->title);
});