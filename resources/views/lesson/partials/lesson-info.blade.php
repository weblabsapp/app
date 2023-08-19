<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-link btn-block text-left float-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    <span><i class="fa fa-sheet-plastic"></i></span>    <span><strong>Lesson:</strong> {{ $lesson->topic->title }} \ {{ strtoupper($courseTag) }} {{ ucwords($lesson->tag) }}</span>
                </button>
            </div>
            <div class="col-md-6 text-right">
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
                            @if ($lesson->checklist->count())
                                <a class="btn btn-success btn-sm text-white rounded-right" rel="tooltip" data-placement="top"
                                   data-original-title="Mark as completed" data-toggle="modal" data-target="#complete-summary-modal" data-keyboard="false" data-backdrop="static">
                                    <i id="mark-as-completed-icon" class="fa-solid fa-check"></i>
                                </a>
                            @else
                                <a class="btn btn-success btn-sm text-white rounded-right" rel="tooltip" data-placement="top"
                                   data-original-title="Mark as completed" onclick="markAsCompleted('<?=$lessonTag?>', this)">
                                    <i id="mark-as-completed-icon" class="fa-solid fa-check"></i>
                                </a>
                            @endif
                        </div>
                    @endif
                @else
                    <span class="float-right p-2 badge badge-warning">
                    Pending
                </span>
                @endif
            </div>
        </div>
    </div>
    <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#lesson-info-accordion">
        {!! $lesson->full_content !!}
    </div>
</div>