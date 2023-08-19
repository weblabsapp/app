@if ($lesson->AIQuestion()->exists())
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span><i class="fa fa-wand-sparkles"></i></span> <span><strong>AI Assistant</strong></span>
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#lesson-info-accordion">
            <div class="card-body" style="overflow-y: scroll; max-height: 700px;">
                <div id="chat-windows-explain">
                    <p class="mb-0">Simply, you can ask our AI assistant to check or debug your code, just as expressed in the below image:</p>
                    <img src="https://cdn.weblabs.local/images/lesson-ai-example.jpg" width="100%" />
                </div>
                <div class="chat_window">
                    <ul class="messages"></ul>
                    <div class="bottom_wrapper clearfix">
                        @foreach($lesson->AIQuestion()->get() as $AIQuestion)
                            <button class="btn btn-info lesson-ai-question" data-text="{{ $AIQuestion->text }}" data-course-tag="{{ $courseTag }}">{!! $AIQuestion->text !!}</button>
                        @endforeach
                    </div>
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
        </div>
    </div>
@endif