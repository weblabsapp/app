@push('scripts')
    <script>
        var require = { paths: { vs: '{{ asset('js/node_modules/monaco-editor/min/vs') }}' } };
    </script>
    <script src="{{ asset('js/node_modules/monaco-editor/min/vs/loader.js') }}" defer></script>
    <script src="{{ asset('js/node_modules/monaco-editor/min/vs/editor/editor.main.nls.js') }}" defer></script>
    <script src="{{ asset('js/node_modules/monaco-editor/min/vs/editor/editor.main.js') }}" defer></script>

    <script>
        window.addEventListener('load', (event) => {
            let editor = monaco.editor.create(document.getElementById('editor'), {
                value: ['<\?php', '\necho "Hello World!";', ''].join('\n'),
                language: 'php'
            });

            // Hack to define editor globally
            window.editor = editor;

            function runCode()
            {
                $('#run-code-icon').addClass('hidden');
                $('#run-code-spinner').removeClass('hidden');

                let editorValue = editor.getValue();
                let languageOptionsObj = {};
                $('.language-options').find('.language-option:checked').map((index, element) => {
                    languageOptionsObj[$(element).attr('name')] = $(element).val();
                });
                let sandboxId = localStorage.getItem('sandbox_id') || getSandboxId();
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
            editor.onDidChangeModelContent((event) => {
                window.isContentChanged = true;
            });

        });

        $(window).on('beforeunload', function(e) {
            let editorValue = editor.getValue();
            let loadedContent = window.loadedContent || editorValue;
            if (typeof isContentChanged !== "undefined" && isContentChanged && loadedContent !== editorValue) {
                return true;
            }
        });

        $(function () {
            $('[rel="tooltip"]').tooltip();
        });

        function getSandboxId() {
            let sandboxId = null;

            $.ajax({
                type: 'GET',
                url: '{{ get_route('api.getSandboxName') }}',
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
