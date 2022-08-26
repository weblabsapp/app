@push('scripts')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/ace.min.js"
            charset="utf-8"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/mode-{{ $courseTag }}.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/ext-language_tools.min.js" type="text/javascript"
            charset="utf-8"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.9.6/theme-xcode.min.js"
            charset="utf-8"></script>

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
                $('.language-options').find('.language-option:checked').map((index, element) => {
                    languageOptionsObj[$(element).attr('name')] = $(element).val();
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

        $(window).on('beforeunload', function (e) {
            let editorValue = editor.getValue();
            let loadedContent = window.loadedContent || editorValue;
            if (typeof isContentChanged !== "undefined" && isContentChanged && loadedContent !== editorValue) {
                return true;
            }
        });

        $(function () {
            $('[rel="tooltip"]').tooltip();
        });

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
    </script>
@endpush
