@extends('layouts.courses.layout')

@section('is-courses-nav', 'active')

@section('content')
    <div class="main-body">
        {{ \Diglactic\Breadcrumbs\Breadcrumbs::render('courses') }}
        <div class="row m-0">
            @if($enrollments->count())
                @foreach($enrollments as $enrollment)
                <div class="col-md-3 p-0">
                    <div class="card nice-card">
                        <div class="background-block">
                            <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                        </div>
                        <div class="profile-thumb-block" style="position: relative; top: -20px;">
                            <img
                                src="{{ asset($enrollment->course->logo) }}"
                                alt="profile-image"
                                class="profile"
                            />
                        </div>
                        <div class="card-content" style="height: auto;">
                            <span class="badge badge-info m-1">Pending <span class="badge badge-light">{{ $enrollment->course->progress_count['pending'] }}</span> </span>
                            <span class="badge badge-info m-1">Completed <span class="badge badge-light">{{ $enrollment->course->progress_count['completed'] }}</span> </span>
                            <span class="badge badge-dark m-1">In Progress <span class="badge badge-light">{{ $enrollment->course->progress_count['in_progress'] }}</span> </span>
                            <br /><br />
                            @php($total = $enrollment->course->progress_count['pending'] + $enrollment->course->progress_count['completed'] + $enrollment->course->progress_count['in_progress'])
                            @php($progress = ceil($enrollment->course->progress_count['completed'] / $total * 100))
                            <small>Your progress ({{ $progress }}%)</small>
                            <div class="progress mb-3" style="height: 5px; background-color: #d7d7d7;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="{{ $total }}"></div>
                            </div>
                            <div class="icon-block">
                                <a class="btn btn-sm btn-primary" href="{{ get_route('web.getLesson', ['courseTag' => $enrollment->course->tag, 'lessonTag' => $enrollment->course->last_enrolled_lesson_tag]) }}">Continue</a>
                                <a class="btn btn-sm btn-danger" href="#" onclick="disEnroll('{{ $enrollment->course->tag }}')">
                                    <span id="dis-enroll-text">Dis-enroll</span>
                                    <spinner id="dis-enroll-spinner" class="hidden">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        <span class="sr-only">Loading...</span>
                                    </spinner>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="col-md-12 p-0">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>You have not enrolled in any course yet!</h5>
                        <a href="{{ get_route('web.homePage') }}#courses" class="btn btn-primary  mt-3">Enroll now</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection

@include('layouts.courses.scripts')

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection
