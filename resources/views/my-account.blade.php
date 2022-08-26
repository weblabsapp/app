@extends('layouts.my-account.layout')

@section('is-account-nav', 'active')

@section('content')
    <div class="main-body">
        <!-- Breadcrumb -->
        {{ Breadcrumbs::render('my-account') }}
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset(sprintf('images/%s-avatar.png', \Illuminate\Support\Facades\Auth::user()->gender)) }}" alt="Admin"
                                 class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ either_of(\Illuminate\Support\Facades\Auth::user()->name, 'Edit your name') }}</h4>
                                <p class="text-secondary mb-1">
                                    {{ either_of(\Illuminate\Support\Facades\Auth::user()->username, '@username') }}
                                </p>
                                {{--                                <button class="btn btn-primary">Update Avatar</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        @if(empty(\Illuminate\Support\Facades\Auth::user()->social_profiles))
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    Social Profiles
                                </h6>
                            </li>
                            <li class="list-group-item d-flex justify-content-center">
                                <h6 class="mb-0">
                                    Soon
                                </h6>
                            </li>
                        @else
                            @php($socialProfiles = \Illuminate\Support\Facades\Auth::user()->social_profiles)
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg>
                                    Website
                                </h6>
                                <span class="text-secondary">{{ $socialProfiles['web'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                    </svg>
                                    Github
                                </h6>
                                <span class="text-secondary">{{ '@' . $socialProfiles['github'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                    Twitter
                                </h6>
                                <span class="text-secondary">{{ '@' . $socialProfiles['twitter'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                    Instagram
                                </h6>
                                <span class="text-secondary">{{ '@' . $socialProfiles['instagram'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>
                                    Facebook
                                </h6>
                                <span class="text-secondary">{{ '@' . $socialProfiles['facebook'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-center p-0">
                                <a class="btn btn-primary text-white w-100 rounded-bottom" data-toggle="modal"
                                   data-target="#social-profiles-modal" style="border-radius: 0 0;">Edit social profiles
                                    info</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-8 text-secondary form-group m-0">
                                <span id="profile-name-text">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                <input name="name" type="text" id="profile-name-editable" class="form-control hidden"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->name }}"/>
                            </div>
                            <div class="col-sm-1 text-secondary">
                                <a id="profile-name-edit-btn" class="text-secondary edit-profile-attribute-btn" href="javascript:;"
                                   onclick="editProfileAttribute(this);" data-attribute="name"><i
                                            class="fa fa-pencil"></i></a>
                                <a id="profile-name-save-btn" class="text-secondary hidden save-profile-attribute-btn"
                                   href="javascript:;" onclick="saveProfileAttribute(this);" data-attribute="name">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">User Name</h6>
                            </div>
                            <div class="col-sm-8 text-secondary form-group m-0">
                                <span id="profile-username-text">{{ \Illuminate\Support\Facades\Auth::user()->username }}</span>
                                <input name="username" type="text" id="profile-username-editable" class="form-control hidden"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->username }}"/>
                            </div>
                            <div class="col-sm-1 text-secondary">
                                <a id="profile-username-edit-btn" class="text-secondary edit-profile-attribute-btn" href="javascript:;"
                                   onclick="editProfileAttribute(this);" data-attribute="username"><i
                                            class="fa fa-pencil"></i></a>
                                <a id="profile-username-save-btn" class="text-secondary hidden save-profile-attribute-btn"
                                   href="javascript:;" onclick="saveProfileAttribute(this);" data-attribute="username">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-8 text-secondary form-group m-0">
                                <span id="profile-email-text">{{ \Illuminate\Support\Facades\Auth::user()->email }}</span>
                                <div id="profile-email-editable" class="input-group mb-3 hidden">
                                    <input name="email" type="text" class="form-control"
                                           value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="border-radius: 0 5px 5px 0;">
                                            <input type="checkbox"
                                                   aria-label="Checkbox for following text input" {{ \Illuminate\Support\Facades\Auth::user()->is_email_hidden ? "checked" : "" }}>
                                            &nbsp;Hide Email
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1 text-secondary">
                                <a id="profile-email-edit-btn" class="text-secondary" href="javascript:;"
                                   onclick="editProfileAttribute(this);" data-attribute="email"><i
                                            class="fa fa-pencil"></i></a>
                                <a id="profile-email-save-btn" class="text-secondary hidden"
                                   href="javascript:;" onclick="saveProfileAttribute(this);" data-attribute="email">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Job Title</h6>
                            </div>
                            <div class="col-sm-8 text-secondary form-group m-0">
                                <span id="profile-job_title-text">{{ \Illuminate\Support\Facades\Auth::user()->job_title }}</span>
                                <input name="job_title" type="text" id="profile-job_title-editable" class="form-control hidden"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->job_title }}"/>
                            </div>
                            <div class="col-sm-1 text-secondary">
                                <a id="profile-job_title-edit-btn" class="text-secondary" href="javascript:;"
                                   onclick="editProfileAttribute(this);" data-attribute="job_title"><i
                                            class="fa fa-pencil"></i></a>
                                <a id="profile-job_title-save-btn" class="text-secondary hidden"
                                   href="javascript:;" onclick="saveProfileAttribute(this);" data-attribute="job_title">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Country</h6>
                            </div>
                            <div class="col-sm-8 text-secondary form-group m-0">
                                <span id="profile-country-text">{{ \App\Enums\CountriesEnum::getCountryLabel(\Illuminate\Support\Facades\Auth::user()->country) }}</span>
                                <select name="country" id="profile-country-editable" class="form-control hidden">
                                    @foreach(\App\Enums\CountriesEnum::getCountriesWithLabels() as $country => $label)
                                        <option value="{{ $country }}" {{ $country == \Illuminate\Support\Facades\Auth::user()->country ? "selected" : "" }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-1 text-secondary">
                                <a id="profile-country-edit-btn" class="text-secondary" href="javascript:;"
                                   onclick="editProfileAttribute(this);" data-attribute="country"><i
                                            class="fa fa-pencil"></i></a>
                                <a id="profile-country-save-btn" class="text-secondary hidden"
                                   href="javascript:;" onclick="saveProfileAttribute(this);" data-attribute="country">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">City</h6>
                            </div>
                            <div class="col-sm-8 text-secondary form-group m-0">
                                <span id="profile-city-text">{{ \Illuminate\Support\Facades\Auth::user()->city }}</span>
                                <input name="city" type="text" id="profile-city-editable" class="form-control hidden"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->city }}"/>
                            </div>
                            <div class="col-sm-1 text-secondary">
                                <a id="profile-city-edit-btn" class="text-secondary" href="javascript:;"
                                   onclick="editProfileAttribute(this);" data-attribute="city"><i
                                            class="fa fa-pencil"></i></a>
                                <a id="profile-city-save-btn" class="text-secondary hidden"
                                   href="javascript:;" onclick="saveProfileAttribute(this);" data-attribute="city">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Gender</h6>
                            </div>
                            <div class="col-sm-8 text-secondary form-group m-0">
                                <span id="profile-gender-text">{{ \App\Enums\GendersEnum::getGenderLabel(\Illuminate\Support\Facades\Auth::user()->gender) }}</span>
                                <select name="gender" id="profile-gender-editable" class="form-control hidden">
                                    @foreach(\App\Enums\GendersEnum::getGendersWithLabels() as $gender => $label)
                                        <option value="{{ $gender }}" {{ $gender == \Illuminate\Support\Facades\Auth::user()->gender ? "selected" : "" }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-1 text-secondary">
                                <a id="profile-gender-edit-btn" class="text-secondary" href="javascript:;"
                                   onclick="editProfileAttribute(this);" data-attribute="gender"><i
                                            class="fa fa-pencil"></i></a>
                                <a id="profile-gender-save-btn" class="text-secondary hidden"
                                   href="javascript:;"  onclick="saveProfileAttribute(this);" data-attribute="gender">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutters-sm">
                    @php($enrolledCourses = false)
                    @foreach($enrollments as $enrollment)
                        @if(!$enrollment->course)
                            @continue
                        @else
                            @php($enrolledCourses = true)
                        @endif
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <a class="navbar-brand p-0">
                                        <img src="{{ asset(sprintf('images/%s_logo_32.png', $enrollment->course->tag)) }}" alt="{{ $enrollment->course->tag }} logo"/>
                                    </a>
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark" href="#">
                                            <span class="d-none d-lg-block">In Progress</span>
                                            <span class="d-sm-block d-md-none"><i
                                                        class="fa fa-person-running"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary" href="#">
                                            <span class="d-none d-lg-block">Pending</span>
                                            <span class="d-sm-block d-md-none"><i class="fa fa-clock"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary" href="#">
                                            <span class="d-none d-lg-block">Completed</span>
                                            <span class="d-sm-block d-md-none"><i class="fa fa-check"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <small>Printing statements</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>File handlers</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                         aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Hashing functions</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                         aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>I/O streaming</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                         aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Flow control</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                         aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if(!$enrolledCourses)
                <div class="card">
                    <div class="card-body justify-content-center">
                        <p>You have not enrolled in any course yet!</p>
                        <p>
                            <a class="btn btn-primary" href="{{ get_route('web.homePage') }}">Explore Courses</a>
                        </p>
                    </div>
                </div>
                @endif

                @if (isset($socialProfiles))
                <div id="social-profiles-modal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Social Profiles</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ get_route('api.saveSocialProfiles') }}" method="post">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-globe mr-2 icon-inline"><circle cx="12"
                                                                                                            cy="12"
                                                                                                            r="10"></circle><line
                                                            x1="2" y1="12" x2="22" y2="12"></line><path
                                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                            </span>
                                        </div>
                                        <input id="social-profile-web" type="text" class="form-control"
                                               value="{{ $socialProfiles['web'] }}"/>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-github mr-2 icon-inline"><path
                                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                            </span>
                                        </div>
                                        <input id="social-profile-github" type="text" class="form-control"
                                               value="{{ $socialProfiles['github'] }}"/>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-twitter mr-2 icon-inline text-info"><path
                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                            </span>
                                        </div>
                                        <input id="social-profile-twitter" type="text" class="form-control"
                                               value="{{ $socialProfiles['twitter'] }}"/>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-instagram mr-2 icon-inline text-danger"><rect
                                                            x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path
                                                            d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line
                                                            x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                            </span>
                                        </div>
                                        <input id="social-profile-instagram" type="text" class="form-control"
                                               value="{{ $socialProfiles['instagram'] }}"/>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-facebook mr-2 icon-inline text-primary"><path
                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                            </span>
                                        </div>
                                        <input id="social-profile-facebook" type="text" class="form-control"
                                               value="{{ $socialProfiles['facebook'] }}"/>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>


    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection

@include('layouts.my-account.my-account-scripts')
