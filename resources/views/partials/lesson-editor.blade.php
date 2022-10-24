<div class="col-md-6 pl-0">
    <div id="actions-buttons" class="card">
        <div class="card-header">
            <p class="position-absolute" style="line-height: 2.2">
                <img src="{{ Storage::disk('s3assets')->url($courseLogo) }}" width="32" />
                <strong>{{ $lesson->title }} (<span id="loaded-file-name">Untitled</span>)</strong>
            </p>
            @include('partials.lesson-action-buttons')
        </div>
    </div>
    <div id="editor" class="col-md-12" style="height: 300px; border: 1px solid grey"></div>
    <div class="language-options form-check-inline">
        @foreach($lesson->command_options as $option)
        <div class="form-check">
            @switch($option->type)
                @case('bool')
                <input class="form-check-input language-option" type="checkbox" name="{{ $option->key }}" value="{{ $option->value }}" id="{{ $option->key }}-option" {{ $option->value ? "checked" : "" }}>
                <label class="form-check-label" for="{{ $option->key }}-option">
                    {{ $option->label ?? $option->key }}
                </label>
                @break
                @case('text')
                <input class="form-check-input language-option" type="text" name="{{ $option->key }}" value="{{ $option->value }}" id="{{ $option->key }}-option">
                <label class="form-check-label" for="{{ $option->key }}-option">
                    {{ $option->label ?? $option->key }}
                </label>
                @break
            @endswitch
        </div>
        @endforeach
    </div>
    <div class="col-md-12 pr-0 pl-0 mt-3">
        <div class="card" id="output">
            <div class="card-header">
                <strong>Output</strong>
            </div>
            <div id="renderable-output" class="card-body">
                Hit "Run code" to get output.
            </div>
        </div>
    </div>
    <div class="col-md-12 pr-0 pl-0 mt-3">
        <nav aria-label="">
            <ul class="pagination justify-content-center">
                @if(!empty($nextAndPreviousLessons['previous_lesson']))
                <li class="page-item">
                    <a class="page-link" href="{{ get_route('web.getLesson', ['courseTag' => $courseTag, 'lessonTag' => $nextAndPreviousLessons['previous_lesson']->tag]) }}" tabindex="-1">
                        <i class="fa-solid fa-backward"></i>&nbsp;&nbsp;{{ $nextAndPreviousLessons['previous_lesson']->topic->title }} \ {{ $nextAndPreviousLessons['previous_lesson']->title }}
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-backward"></i>&nbsp;&nbsp;Previous</a>
                </li>
                @endif

                @if(!empty($nextAndPreviousLessons['next_lesson']))
                <li class="page-item">
                    <a class="page-link" href="{{ get_route('web.getLesson', ['courseTag' => $courseTag, 'lessonTag' => $nextAndPreviousLessons['next_lesson']->tag]) }}">
                        {{ $nextAndPreviousLessons['next_lesson']->topic->title }} \ {{ $nextAndPreviousLessons['next_lesson']->title }}&nbsp;&nbsp;<i class="fa-solid fa-forward"></i>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next&nbsp;&nbsp;<i class="fa-solid fa-forward"></i></a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>