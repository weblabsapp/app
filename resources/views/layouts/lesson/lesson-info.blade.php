<div class="card">
    <div class="card-header">
        <span><strong>Lesson:</strong> {{ $lesson->topic->title }} \ {{ strtoupper($courseTag) }} {{ ucwords($lesson->tag) }}</span>
        <div class="float-right">
        @if($lesson->progress)
            @if($lesson->progress->is_completed)
                <span class="float-right p-2 badge badge-success">
                    Completed
                </span>
            @else
                <div class="btn-group" role="group">
                    <span class="p-2 badge badge-primary" style="border-radius: 5px 0 0 5px;">
                        In Progress
                    </span>
                    <a class="btn btn-success btn-sm text-white rounded-right" rel="tooltip" data-placement="top" data-original-title="Mark as completed" onclick="markAsCompleted('{{ $lesson->tag }}');">
                        <i id="mark-as-completed-icon" class="fa-solid fa-check"></i>
                        <spinner id="mark-as-completed-spinner" class="hidden">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span class="sr-only">Loading...</span>
                        </spinner>
                    </a>
                </div>
            @endif
        @else
            <span class="float-right p-2 badge badge-warning">
                Pending
            </span>
        @endif
        </div>
    </div>
    <div class="card-body">
        {!! $lesson->full_content !!}
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        function markAsCompleted(lessonTag) {
            $('#mark-as-completed-icon').addClass('hidden');
            $('#mark-as-completed-spinner').removeClass('hidden');

            let url = '{{ get_route('api.markLessonAsCompleted', ['courseTag' => ':courseTag', 'lessonTag' => ':lessonTag']) }}'
                .replace(':courseTag', '{{ $courseTag }}')
                .replace(':lessonTag', lessonTag);

            $.ajax({
                type: 'POST',
                url: url,
                success: function (response, call = false) {
                    if (call !== true) {
                        return;
                    }
                    window.location.reload();
                },
                error: function (xhr, call = false) {
                    if (call !== true) {
                        return;
                    }
                    return {
                        message: translate(...getErrorFromResponse(xhr)),
                        status: TOAST_STATUS.DANGER
                    }
                },
                complete: function () {
                    $('#mark-as-completed-spinner').addClass('hidden');
                    $('#mark-as-completed-icon').removeClass('hidden');
                }
            })
        }
    </script>
@endpush