<div class="text-right">
    <div class="btn-group" role="group" aria-label="Basic example">
    {{--    <button class="btn btn-info" rel="tooltip" data-placement="top" title="Share code"><i class="fa-solid fa-share-nodes"></i></button>--}}
        <button class="btn btn-dark" rel="tooltip" data-placement="top" title="Watch tutorial" data-toggle="modal" data-target="#watch-tutorial-modal" data-backdrop="static"><i class="fa-solid fa-clapperboard"></i></button>
        <button class="btn btn-secondary" rel="tooltip" data-placement="top" data-toggle="modal" data-target="#save-code-modal" data-keyboard="false" data-backdrop="static" title="Save code" data-course="{{ $courseTag }}"><i class="fa fa-save"></i></button>
        <button class="btn btn-dark" rel="tooltip" data-placement="top" data-toggle="modal" data-target="#load-code-modal" data-keyboard="false" data-backdrop="static" title="Load code from file" data-course="{{ $courseTag }}"><i class="fa-solid fa-code"></i></button>
        <button id="run-code" class="btn btn-success" rel="tooltip" data-placement="top" title="Run code">
            <i id="run-code-icon" class="fa fa-play"></i>
            <spinner id="run-code-spinner" class="hidden">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>
            </spinner>
        </button>
    </div>
</div>