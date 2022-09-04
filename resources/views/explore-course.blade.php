@extends('layouts.home.layout')

@section('is-courses-nav', 'active')

@section('content')
<div class="main-body">
    <div class="col-md-12">
        <div class="row">
            <div class="alert alert-info w-100">
                <p>This PHP Course Covers the following and then some...</p>
                <p><strong>Note: </strong>Feel free to skip these topics. You are about to learn them one by one.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="sticky">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-introduction" data-toggle="list" href="#introduction" role="tab" aria-controls="introduction">Introduction</a>
                        @foreach($course->topics as $topic)
                        <a class="list-group-item list-group-item-action" id="list-{{ $topic->slug }}" data-toggle="list" href="#{{ $topic->slug }}" role="tab" aria-controls="{{ $topic->slug }}">{{ $topic->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-0 mt-3 mt-sm-0">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="introduction" role="tabpanel" aria-labelledby="list-introduction">
                        <div class="card">
                            <div id="youtube-player"></div>
                        </div>
                    </div>
                    @foreach($course->topics as $topic)
                    <div class="tab-pane fade" id="{{ $topic->slug }}" role="tabpanel" aria-labelledby="list-{{ $topic->slug }}">
                        <div class="accordion" id="{{ $topic->slug }}-accordion">
                            @foreach($topic->lessons as $index => $lesson)
                            <div class="card">
                                <div class="card-header" id="{{ $topic->slug }}-tab">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $lesson->tag }}" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $lesson->title }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="{{ $lesson->tag }}" class="collapse{{ $index == 0 ? ' show' : '' }}" aria-labelledby="{{ $topic->slug }}-tab" data-parent="#{{ $topic->slug }}-accordion">
                                    <div class="card-body">
                                        {!! $lesson->explore_content !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
<script type="text/javascript">
    let player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('youtube-player', {
            height: $(window).height() * 0.5,
            width: '100%',
            videoId: 'a7_WFUlFS94'
        });
    }

    //Functions to stop-pause Video
    function stopVideo() {
        if (player && typeof player.stopVideo !== "undefined") {
            player.stopVideo();
        }
    }

    function pauseVideo() {
        if (player && typeof player.pauseVideo !== "undefined") {
            player.pauseVideo();
        }
    }

    $(function() {
        $('a#list-introduction[data-toggle="list"]').on('hidden.bs.tab', function (e) {
            stopVideo();
        })

        $('#smartwizard').on("showStep", function() {
            if (typeof player === "undefined") {
                onYouTubeIframeAPIReady();
            }
        });

        $("#smartwizard").on("leaveStep", function() {
            if (typeof player !== "undefined") {
                stopVideo();
            }
        });

        $('a.list-group-item.active')
            .addClass('list-group-item-secondary');

        $('a.list-group-item').on('click', function () {
            $('a.list-group-item').removeClass('list-group-item-secondary');
            $(this).addClass('list-group-item-secondary');
        });
    });
</script>
@endpush