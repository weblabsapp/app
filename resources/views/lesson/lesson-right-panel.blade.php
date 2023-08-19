<div class="accordion" id="lesson-info-accordion">
    @include('lesson.partials.lesson-ai-questions', ['courseTag' => $courseTag, 'lesson' => $lesson])
    @include('lesson.partials.lesson-info', ['courseTag' => $courseTag, 'lesson' => $lesson])
</div>