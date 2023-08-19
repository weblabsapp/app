@push('scripts')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/ace.min.js"
            charset="utf-8"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/mode-{{ $courseTag }}.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/ext-language_tools.min.js" type="text/javascript"
            charset="utf-8"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/theme-xcode.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.10.1/ext-searchbox.min.js"
            integrity="sha512-RjWHxvDlXm3I4xLhSj4MeIwRmHDaZr2p6rXhxTgaPEeoUmTtWmgL1c3pIp1iceLnsk95xF5DJw9LvFmwNY2i/Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script type="text/javascript" src="{{ asset('js/macro.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lesson.ai-chat-box.min.js') }}"></script>

    <script>
        window.addEventListener('load', (event) => {
            ace.require("ace/ext/language_tools");

            let editor = ace.edit("editor");

            editor.session.setValue(['<\?php', '\necho "Hello World!";', ''].join('\n'));
            editor.setFontSize(18);
            editor.setTheme("ace/theme/xcode");
            editor.session.setMode("ace/mode/{{ $courseTag }}");
            editor.setOptions({
                useWorker: false,
                enableBasicAutocompletion: true,
                enableLiveAutocompletion: true
            });


            // Hack to define editor globally
            window.editor = editor;

            function runCode() {
                $('#run-code-icon').addClass('hidden');
                $('#run-code-spinner').removeClass('hidden');

                let editorValue = editor.getValue();
                let languageOptionsObj = {};
                $('.language-option').map((index, element) => {
                    let value = $(element).val();
                    if ($(element).attr('type') === "checkbox") {
                        value = $(element).is(":checked");
                    }
                    languageOptionsObj[$(element).attr('name')] = value;
                });
                let sandboxId = localStorage.getItem('sandbox_id') || getSandboxId('{{ $courseTag }}');
                let runCodeRoute = '{{ get_route('api.runCode', ['sandboxId' => ':sandboxId']) }}'
                    .replace(':sandboxId', sandboxId);

                $.ajax({
                    type: 'POST',
                    url: runCodeRoute,
                    dataType: 'json',
                    data: JSON.stringify({
                        code: editorValue,
                        courseTag: '{{ $courseTag }}',
                        lessonTag: '{{ $lessonTag }}',
                        options: languageOptionsObj
                    }),
                    success: function (response, call = false) {
                        if (call !== true) {
                            return;
                        }
                        let output = response.content.output
                            .trim('\n')
                            .replaceAll('\n', '<br>')
                            .replaceAll('\t', '    ');
                        $('#renderable-output').html(output);
                        document.getElementById('output').scrollIntoView({
                            behavior: 'smooth'
                        });
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
                        $('#run-code-spinner').addClass('hidden');
                        $('#run-code-icon').removeClass('hidden');
                    }
                })
            }

            document.getElementById('run-code').onclick = runCode;

            window.loadedContent = editor.getValue();

            editor.on('change', (event) => {
                window.isContentChanged = true;
            });
        });

        $('#apply-pip-btn').on('click', function () {
            applyPip($('#lesson-video')[0]);
        });

        $('#close-request-pip-dev').on('click', function () {
            $('#request-pip-div').hide();
            $('#lesson-video').css({ filter: 'brightness(100%)' })
        });

        $(window).on('beforeunload', function (e) {
            let editorValue = editor.getValue();
            let loadedContent = window.loadedContent || editorValue;
            if (typeof isContentChanged !== "undefined" && isContentChanged && loadedContent !== editorValue) {
                return true;
            }
        });

        $(function () {
            $('[rel="tooltip"]').tooltip();

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
                let currentFilesCounter = $(this).closest('table').find('.files-count');
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
                        currentFilesCounter.text(parseInt(currentFilesCounter.text()) - 1);

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

        $('#watch-tutorial-modal').on('hidden.bs.modal', function () {
            if (!pipActive) {
                $('#lesson-video')[0].pause();
            }
        });

        @if(!empty($lesson->video))
        $('#lesson-video')[0].addEventListener("timeupdate", {!! $lesson->macros !!}, false);
        applyListeners($('#lesson-video')[0]);
        @endif

        function getSandboxId(courseTag) {
            let sandboxId = null;
            let url = '{{ get_route('api.getSandboxName', ['courseTag' => ':courseTag']) }}'
                .replace(':courseTag', courseTag);

            $.ajax({
                type: 'GET',
                url: url,
                async: false,
                success: function (response, call = false) {
                    if (call !== true) {
                        return;
                    }
                    localStorage.setItem('sandbox_id', response.content.sandbox_id);
                    sandboxId = response.content.sandbox_id;
                },
                error: function (xhr, call = false) {
                    if (call !== true) {
                        return;
                    }
                    return {
                        message: translate(...getErrorFromResponse(xhr)),
                        status: TOAST_STATUS.DANGER
                    }
                }
            });

            return sandboxId;
        }

        function markAsCompleted(lessonTag, element) {

            $(element).addClass('disabled');

            loader('show');

            let url = '{{ get_route('api.markLessonAsCompleted', ['courseTag' => ':courseTag', 'lessonTag' => ':lessonTag']) }}'
                .replace(':courseTag', '{{ $courseTag }}')
                .replace(':lessonTag', lessonTag);

            let checkedItems = [];
            let checklist = $('#complete-summary').find('input[type="checkbox"]:checked');
            checklist.map((i, elem) => checkedItems.push($(elem).val()));

            $.ajax({
                type: 'POST',
                url: url,
                data: JSON.stringify({
                    checked_items: checkedItems
                }),
                success: function (response, call = false) {
                    if (call !== true) {
                        return;
                    }

                    if (!checkedItems.length) {
                        $('#complete-summary-modal').modal('show');
                    }

                    if (!'is_completed' in response.content || !response.content.is_completed) {
                        $('#complete-summary-modal').modal('hide');
                        return;
                    }

                    $('#complete-summary').addClass('hidden');
                    $('#complete-congrats').removeClass('hidden');
                    $('#mark-as-completed-btn').remove();
                    $('#complete-next-lesson-btn').removeClass('hidden');
                    let player = document.querySelector("lottie-player");
                    player.load("{{ asset('json/96871-star.json') }}");
                    player.play();
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
                    loader('hide');
                    $(element).removeClass('disabled');
                }
            })
        }

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
