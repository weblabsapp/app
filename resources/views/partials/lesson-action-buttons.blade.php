<div class="text-right">
    <div class="btn-group" role="group" aria-label="Basic example">
    {{--    <button class="btn btn-info" rel="tooltip" data-placement="top" title="Share code"><i class="fa-solid fa-share-nodes"></i></button>--}}
        <button class="btn btn-dark" rel="tooltip" data-placement="top" title="Watch tutorial"><i class="fa-solid fa-clapperboard"></i></button>
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

@push('scripts')
    <script type="text/javascript">
        $(function () {
            let request = null;

            $('.submit-save-code').on('click', function () {
                if (typeof editor === "undefined") {
                    alert('Code editor could not be found. Please refresh the page.');
                    return false;
                }
                let editorValue = editor.getValue();
                let fileName = $('#file-name').val();

                if (typeof fileName === "undefined" || fileName.trim() === "") {
                    alert('Please specify a valid file name.');
                    return false;
                }

                loader('show');

                $.ajax({
                    type: 'POST',
                    url: '{{ get_route('api.cloudUploadLessonFile') }}',
                    dataType: 'json',
                    data: JSON.stringify({
                        content: editorValue,
                        course_tag: '{{ $courseTag }}',
                        lesson_tag: '{{ $lessonTag }}',
                        file_name: fileName,
                    }),
                    success: function (response, call = false) {
                        if (call !== true) {
                            return;
                        }
                        $('#save-code-modal').modal('hide');
                        localStorage.setItem(fileName+'.'+'{{ $courseFileExt }}', editorValue);
                        window.loadedContent = editorValue;
                        $('#loaded-file-name').text(fileName+'.'+'{{ $courseFileExt }}');
                        return {
                            message: translate(response.content.message),
                            status: TOAST_STATUS.SUCCESS
                        }
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
                    complete: function (jqxhr, status) {
                        if (status === "abort") {
                            return false;
                        }
                        loader('hide');
                    }
                })
            });

            $('#save-code-modal, #load-code-modal').on('show.bs.modal', function (e) {
                $(e.target).find('.lesson-files-loader').removeClass('hidden');

                let prefix = '{{ \Illuminate\Support\Facades\Auth::id() }}';
                let course = '{{ $courseTag }}';
                let lessonTag = '{{ $lessonTag }}';
                let showDownloadLink = true;

                if ($(e.target).attr('id') === 'load-code-modal') {
                    showDownloadLink = false;
                }

                let url = '{{ get_route('api.cloudListLessonFiles', ['prefix' => ':prefix', 'courseTag' => ':courseTag', 'lessonTag' => ':lessonTag']) }}'
                    .replace(':prefix', prefix)
                    .replace(':courseTag', course)
                    .replace(':lessonTag', lessonTag);

                request = $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'json',
                    success: function (response, call = false) {
                        if (call !== true) {
                            return;
                        }
                        listFiles(
                            e.target,
                            response.content.files_list,
                            response.content.files_count,
                            response.content.links_expire_in,
                            showDownloadLink
                        );
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
                    complete: function (jqxhr, status) {
                        if (status === "abort") {
                            return false;
                        }
                        if (status === "error") {
                            $(e.target).find('.alert.alert-danger').removeClass('hidden');
                        } else {
                            $(e.target).find('.files-container').removeClass('hidden');
                        }
                        $(e.target).find('.lesson-files-loader').addClass('hidden');
                    }
                })
            }).on('hidden.bs.modal', function (e) {
                $(e.target).find('.files-container').addClass('hidden');
                $(e.target).find('.alert.alert-danger').addClass('hidden');
                if (typeof request !== "undefined") { // abort ajax call upon closing modal
                    request.abort();
                    request = null;
                }
            });

            $(document).on('click', '#load-code-modal .load-file-link', function (e) {
                e.preventDefault();

                if (typeof editor === "undefined") {
                    alert('Code editor could not be found. Please refresh the page.');
                    return false;
                }

                let loadedContent = window.loadedContent || editor.getValue();

                if (typeof isContentChanged !== "undefined" && isContentChanged && loadedContent !== editor.getValue()) {
                    let confirmLoading = confirm('Editor has been modified. Do you want to proceed without saving?');
                    if (confirmLoading !== true) {
                        return false;
                    }
                }

                let fileName = $(this).data('file-name');
                let cachedContent = localStorage.getItem(fileName);

                if (cachedContent) {
                    afterLoad(fileName, cachedContent);
                    return true;
                }

                loader('show');

                let url = '{{ get_route('api.cloudGetLessonFile', [
                    'prefix' => ':prefix',
                    'courseTag' => ':courseTag',
                    'lessonTag' => ':lessonTag',
                    'fileName' => ':fileName'
                ]) }}'
                    .replace(':prefix', '{{ \Illuminate\Support\Facades\Auth::id() }}')
                    .replace(':courseTag', '{{ $courseTag }}')
                    .replace(':lessonTag', '{{ $lessonTag }}')
                    .replace(':fileName', fileName);

                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'json',
                    success: function (response, call = false) {
                        if (call !== true) {
                            return;
                        }
                        let fileContent = response.content.file_content;
                        afterLoad(fileName, fileContent);
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
                    complete: function (jqxhr, status) {
                        if (status === "abort") {
                            return false;
                        }

                        $('#load-code-modal').modal('hide');
                        loader('hide');
                    }
                })
            });

            $(document).on('click', '.delete-file-link', function (e) {
                if (!confirm('Are you sure want to delete this file?')) {
                    return false;
                }

                loader('show');

                let fileName = $(this).data('file-name');
                let fileIndex = $(this).data('file-index');
                let url = '{{ get_route('api.cloudDeleteLessonFile', [
                    'courseTag' => ':courseTag',
                    'lessonTag' => ':lessonTag',
                    'fileName' => ':fileName'
                ]) }}'
                    .replace(':courseTag', '{{ $courseTag }}')
                    .replace(':lessonTag', '{{ $lessonTag }}')
                    .replace(':fileName', fileName);

                $.ajax({
                    type: 'DELETE',
                    url: url,
                    dataType: 'json',
                    success: function (response, call = false) {
                        if (call !== true) {
                            return;
                        }

                        // Remove related HTML element
                        $('tr#file-index-' + fileIndex).remove();

                        return {
                            message: translate(response.content.message),
                            status: TOAST_STATUS.SUCCESS
                        }
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
                    complete: function (jqxhr, status) {
                        if (status === "abort") {
                            return false;
                        }

                        $('#load-code-modal').modal('hide');
                        loader('hide');
                    }
                })
            });

            $(document).on('click', '.download-file-link', function (e) {
                e.preventDefault();
                let url = $(this).data('link');
                window.open(url, '_blank');
            });
        });

        /**
         * Draw list of files in modal #save-code-modal
         *
         * @param container
         * @param filesList
         * @param filesCount
         * @param linksExpireIn
         * @param showDownloadLink
         * @returns {boolean}
         */
        function listFiles(container, filesList, filesCount, linksExpireIn, showDownloadLink = true) {
            let tdList = [];

            filesList.forEach(function (file, index) {
                let actionButtons = [], downloadLink = '', loadLink = '';
                if (showDownloadLink) {
                    downloadLink = '<a href="javascript:;" data-link=":download_link" target="_blank" title="Download file" class="download-file-link"><i class="fa-solid fa-cloud-arrow-down"></i></a>'
                        .replace(':download_link', file.download_link)
                        .replaceAll(':file_name', file.file_name)
                        .replace(':file_size', file.file_size);
                } else {
                    loadLink = '<a href="javascript:;" class="load-file-link" data-file-name=":file_name" title="Load code from this file"><i class="fa-solid fa-code"></i></a>'
                        .replace(':file_name', file.file_name);
                }

                let deleteLink = '<a href="javascript:;" class="ml-2 delete-file-link" title="Delete file" data-file-name=":file_name" data-file-index=":file_index"><i class="fa fa-trash"></i></a>'
                    .replace(':file_name', file.file_name)
                    .replace(':file_index', index);

                actionButtons.push(loadLink, downloadLink, deleteLink);

                let cell = '<tr id="file-index-:file_index"><th scope="row">:file_name</th><td>:file_size</td><td>:last_modified</td><td class="text-center">:action_buttons</td></tr>'
                    .replaceAll(':file_name', file.file_name)
                    .replace(':file_size', file.file_size)
                    // .replace(':last_modified', file.last_modified ?? 'N/A')
                    .replace(':last_modified', file.last_modified ?? 'N/A')
                    .replace(':action_buttons', actionButtons.join(''))
                    .replace(':file_index', index);

                tdList.push(cell);
            });

            filesCount && $(container).find('.files-list tbody').html(tdList.join(''));
            filesCount && $(container).find('.files-expire-in').text(linksExpireIn);
            $(container).find('.files-count').text(filesCount);
        }

        function afterLoad(fileName, fileContent) {
            editor.setValue(fileContent);
            localStorage.setItem(fileName, fileContent);
            window.loadedContent = fileContent;
            $('#loaded-file-name').text(fileName);
            $('#load-code-modal').modal('hide');
        }
    </script>
@endpush