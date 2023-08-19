@if ($lesson->AIQuestion()->exists())
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#lesson-ai-questions-panel" aria-expanded="true" aria-controls="collapseOne">
                <span><i class="fa fa-wand-sparkles"></i></span> <span><strong>AI Assistant</strong></span>
            </button>

            <div id="lesson-ai-questions-tooltip-new-feature" class="tooltip tooltip-primary bs-tooltip-right" role="tooltip" style="opacity: 1; top: 17px; left: 150px; z-index: 1;">
                <div class="arrow" style="top: 8px;"></div>
                <div class="tooltip-inner" style="white-space: nowrap;">
                    {!! __('ai new feature tooltip note') !!}
                </div>
            </div>
        </h2>
    </div>

    <div id="lesson-ai-questions-panel" class="collapse" aria-labelledby="headingOne" data-parent="#lesson-info-accordion">
        <div class="card-body p-0" style="overflow-y: scroll; max-height: 700px; overflow-x: hidden;">
            <div class="p-3">
                <div id="chat-windows-explain">
                    <p class="mb-0">Simply, you can ask our AI assistant to check or debug your code, just as expressed in the below image:</p>
                    <img src="https://cdn.weblabs.local/images/lesson-ai-example.jpg" width="100%" />
                </div>
                <div class="chat_window">
                    <ul class="messages"></ul>
                </div>
                <div class="ai-message-template hidden">
                    <li class="message">
                        <div class="avatar"><img class="rounded-circle" src="{{ $accountAvatar }}" width="60" /></div>
                        <div class="text_wrapper">
                            <div class="text"><img src="{{ asset('images/typing.gif') }}" width="120" /></div>
                        </div>
                    </li>
                </div>
            </div>
            <div class="bottom_wrapper clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-4 p-0 pl-1 d-flex">
                        <svg width="0" height="0">
                            <defs>
                                <clipPath id="clipper" clipPathUnits="objectBoundingBox">
                                    <path d="M0,0 0.79,0 0.83,0.5 0.79,1 0.81,1 0.85,0.5 0.81,0 0.86,0 0.9,0.5 0.86,1 0.88,1 0.92,0.5 0.88,0 0.93,0 0.97,0.5 0.93,1 0,1z" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span id="lesson-ai-available-questions-tag" href="#">
                            <span>Available AI Questions</span>
                        </span>
                    </div>
                    <div class="col-md-8 col-sm-8 p-1 pr-3" style="overflow-x: scroll;">
                        <span class="btn-group">
                        @php($buttonClass = 'secondary')
                        @foreach($lesson->AIQuestion()->get() as $AIQuestion)
                            <button class="btn lesson-ai-question badge badge-pill badge-{{ $buttonClass }} m-1 float-left" data-text="{{ $AIQuestion->text }}" data-question-id="{{ $AIQuestion->id }}" data-course-tag="{{ $courseTag }}" data-embed-user-code="{{ $AIQuestion->embed_user_code }}">{!! $AIQuestion->text !!}</button>
                            @php($buttonClass = $buttonClass == 'secondary' ? 'info' : 'secondary')
                        @endforeach
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-3 m-0" style="border-top: 1px solid #e0e0e0; background: #dee2e6;">
                <p class="p-0 m-0"><i class="fa fa-info-circle text-info"></i> {{ __('ai limited access note') }}</p>
            </div>
        </div>
    </div>
</div>
@endif