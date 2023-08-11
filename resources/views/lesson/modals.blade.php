<!-- Save File Modal -->
<div class="modal fade" id="save-code-modal" tabindex="-1" role="dialog" aria-labelledby="save-code-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Save code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="text" id="file-name" class="form-control" placeholder="File name" aria-label="File name" aria-describedby="file-name">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">.{{ $courseFileExt }}</span>
                    </div>
                </div>
                <div class="lesson-files-loader d-flex justify-content-center">
                    <div class="spinner-border" role="status"></div>
                    <span class="ml-3">Fetching files...</span>
                </div>
                <div class="files-container hidden">
                    <div class="alert alert-warning">Using an existing file name will override it's content.</div>
                    <div>
                        <table class="table table-striped files-list">
                            <caption>Your lesson files (<span class="files-count"></span>)</caption>
                            <thead>
                            <tr>
                                <th scope="col">File name</th>
                                <th scope="col">File size</th>
                                <th scope="col">Last modified</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" colspan="4" class="text-center">
                                    You have no files yet!
                                </th>
                            </tr>
                            </tbody>
                        </table>
                        <span>
                            Note: The links will automatically be renewed after <span class="files-expire-in"></span>.
                        </span>
                    </div>
                </div>
                <div class="alert alert-danger hidden">
                    <span>Error occurred while fetching files from server.</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submit-save-code">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Load File Modal -->
<div class="modal fade" id="load-code-modal" tabindex="-1" role="dialog" aria-labelledby="load-code-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Load from file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="lesson-files-loader d-flex justify-content-center">
                    <div class="spinner-border" role="status"></div>
                    <span class="ml-3">Fetching files...</span>
                </div>
                <div class="files-container hidden">
                    <div>
                        <table class="table table-striped files-list">
                            <caption>Your lesson files (<span class="files-count"></span>)</caption>
                            <thead>
                            <tr>
                                <th scope="col">File name</th>
                                <th scope="col">File size</th>
                                <th scope="col">Last modified</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" colspan="4" class="text-center">
                                    You have no files yet!
                                </th>
                            </tr>
                            </tbody>
                        </table>
                        <span>
                            Note: The links will automatically be renewed after <span class="files-expire-in"></span>.
                        </span>
                    </div>
                </div>
                <div class="alert alert-danger hidden">
                    <span>Error occurred while fetching files from server.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Complete Checklist Modal -->
<div id="complete-summary-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Completeness Checklist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="complete-congrats" class="hidden">
                    <lottie-player background="transparent" speed="0.5"
                                   style="width: 300px; height: 300px; margin: auto;" loop></lottie-player>
                    <h3 class="text-center">Congratulations !</h3>
                    <p class="text-center">For completing {{ strtoupper($courseTag) }} - {{ $lesson->title }} lesson</p>
                </div>
                <div id="complete-summary">
                    <p>After completing this lesson:</p>
                    <ul class="list-unstyled">
                        @foreach($lesson->checklist as $checklist)
                            <li>
                                <div class="form-check">
                                    <input id="checklist-{{ $checklist->id }}" type="checkbox" class="form-check-input" value="{{ $checklist->id }}" {{ in_array($checklist->id, $lesson->progress->checklist_completeness ?? []) ? "checked" : "" }} />
                                    <label for="checklist-{{ $checklist->id }}" class="form-check-label">{!! $checklist->text !!}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button id="mark-as-completed-btn" type="button" class="btn btn-primary"  onclick="markAsCompleted('{{ $lessonTag }}', this);">Mark as completed</button>
                @if(!empty($nextAndPreviousLessons['next_lesson']))
                    <a id="complete-next-lesson-btn" href="{{ get_route('web.getLesson', ['courseTag' => $courseTag, 'lessonTag' => $nextAndPreviousLessons['next_lesson']->tag]) }}" class="btn btn-primary hidden flashing">
                        {{ $nextAndPreviousLessons['next_lesson']->title }}
                        <i class="fa-solid fa-forward"></i>
                    </a>
                @endif
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@if(!empty($lesson->video))
    <!-- Watch Tutorial Modal -->
    <div class="modal fade" id="watch-tutorial-modal" tabindex="-1" role="dialog" aria-labelledby="watch-tutorial-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ strtoupper($courseTag) }} > {{ $lesson->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video id="lesson-video" class="img-fluid rounded mb-4 mb-lg-0" src="{{ $lesson->video->video_url }}" controls
                           preload="none" poster="{{ $lesson->video->poster }}"
                           controlsList="nodownload noplaybackrate"
                           data-request-pip-time="10"
                           data-require-pip="true"
                    ></video>

                    <div id="request-pip-div">
                        <div class="input-group">
                            <span class="form-control">Click here to minimize <i class='fa-solid fa-arrow-right'></i></span>
                            <div class="input-group-append">
                                <button id="apply-pip-btn" class="btn btn-primary flashing"><i class="fa-solid fa-minimize"></i></button>
                                <button class="btn btn-info" rel="tooltip" data-placement="top" title="This video is an interactive, so requires PiP mode."><i class="fa-solid fa-circle-exclamation"></i></button>
                                <button id="close-request-pip-dev" class="btn btn-danger"><i class="fa-solid fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif