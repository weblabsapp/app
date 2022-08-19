@extends('layouts.notifications.layout')

@section('is-home-nav', 'active')

@section('content')
    <div class="main-body">
        <!-- Breadcrumb -->
        {{ Breadcrumbs::render('notifications') }}
        <!-- /Breadcrumb -->

        <div class="row">
            <div class="col-md-12 right">
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Recent</h6>
                    </div>
                    <div class="box-body p-0">
                        @if(empty($recent))
                        <div class="p-3 d-flex align-items-center">
                            <div class="font-weight-bold mr-3">
                                <div class="small mb-2">No new notifications</div>
                            </div>
                            <br />
                            <div class="text-muted ml-auto"></div>
                        </div>
                        @endif
                        @foreach($recent as $notification)
                        <div class="p-3 d-flex align-items-center">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{ $notification->getIcon() }}" alt="" />
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div class="mb-1">{{ $notification->getTitle() }}</div>
                                <div class="small mb-2">{!! $notification->getText() !!}</div>
                                @if($notification->getActionButtons())
                                    <div class="mt-2">
                                        @foreach($notification->getActionButtons() as $id => $button)
                                            @php($link = $button['link']($notification->notification->placeholders['course_tag'], $notification->notification->placeholders['lesson_tag']))
                                            <a id="{{ $id }}" href="{{ $link }}" class="{{ $button['classes'] }}">{{ $button['text'] }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <br />
                            <div class="text-muted ml-auto">{{ $notification->notification->created_at->diffForHumans() }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Earlier</h6>
                    </div>
                    <div class="box-body p-0">
                        @if(empty($earlier))
                        <div class="p-3 d-flex align-items-center">
                            <div class="font-weight-bold mr-3">
                                <div class="small mb-2">No new notifications</div>
                            </div>
                            <br />
                            <div class="text-muted ml-auto"></div>
                        </div>
                        @endif
                        @foreach($earlier as $notification)
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3 d-flex align-items-center bg-danger justify-content-center rounded-circle text-white">
                                <img src="{{ $notification->getIcon() }}" />
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">{{ $notification->getTitle() }}</div>
                                <div class="small">{!! $notification->getText() !!}</div>
                                @if($notification->getActionButtons())
                                    <div class="mt-2">
                                    @foreach($notification->getActionButtons() as $id => $button)
                                        @php($link = $button['link']($notification->notification->placeholders['course_tag'], $notification->notification->placeholders['lesson_tag']))
                                    <a id="{{ $id }}" href="{{ $link }}" class="{{ $button['classes'] }}">{{ $button['text'] }}</a>
                                    @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="text-muted ml-auto">{{ $notification->notification->created_at->diffForHumans() }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mb-3 text-muted">&copy; 2021-2022 - weblabs.app</p>
    </footer>
@endsection

@include('layouts.signup.signup-scripts')
