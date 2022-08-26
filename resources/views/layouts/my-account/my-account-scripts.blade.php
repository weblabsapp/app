@push('scripts')
    <script type="text/javascript" src="{{ asset('js/form-validation-bundle.min.js') }}"></script>
    <script type="text/javascript">
        let constraints = {
            name: {
                presence: {
                    message: "^" + translate('invalid_name')
                }
            },
            username: {
                presence: {
                    message: "^" + translate('invalid_username')
                }
            },
            email: {
                presence: {
                    message: "^" + translate('invalid_email_address')
                },
                email: {
                    message: "^" + translate('invalid_email_address')
                }
            },
            job_title: {
                presence: {
                    message: "^" + translate('invalid_job_title')
                }
            },
            city: {
                presence: {
                    message: "^" + translate('invalid_city')
                }
            },
            gender: {
                presence: {
                    message: "^" + translate('gender_not_valid')
                },
                inclusion: {
                    within: @json(\App\Enums\GendersEnum::getGenders()),
                    message: "^" + translate('gender_not_valid')
                }
            }
        };

        function editProfileAttribute(element) {
            element = $(element);
            let attribute = element.data('attribute');
            let editable = $('#profile-:attribute-editable'.replace(':attribute', attribute));
            let text = $('#profile-:attribute-text'.replace(':attribute', attribute));
            let editBtn = $('#profile-:attribute-edit-btn'.replace(':attribute', attribute));
            let saveBtn = $('#profile-:attribute-save-btn'.replace(':attribute', attribute));

            editBtn.addClass('hidden');
            saveBtn.removeClass('hidden');
            text.addClass('hidden');
            editable.removeClass('hidden');
        }

        function saveProfileAttribute(element) {
            element = $(element);
            let attribute = element.data('attribute');
            let editable = $('#profile-:attribute-editable'.replace(':attribute', attribute));
            let text = $('#profile-:attribute-text'.replace(':attribute', attribute));
            let editBtn = $('#profile-:attribute-edit-btn'.replace(':attribute', attribute));
            let saveBtn = $('#profile-:attribute-save-btn'.replace(':attribute', attribute));
            let value;
            if (attribute === "email") {
                value = editable.find('input[type="text"]').val();
            } else {
                value = editable.val();
            }
            let requestBody = {
                [attribute]: editable.val()
            };
            let url = '{{ get_route('api.updateProfileAttribute', ['attribute' => ':attribute']) }}'
                .replace(':attribute', attribute);

            if (attribute === 'email') {
                requestBody = {
                    [attribute]: value,
                    is_email_hidden: editable.find('input[type="checkbox"]').is(':checked')
                };
            }

            formValidation.validate(editable.parent().get(0), {[attribute]: constraints[attribute]});

            loader('show');

            $.ajax({
                type: 'PUT',
                url: url,
                data: JSON.stringify(requestBody),
                success: function (response, call = false) {
                    if (call !== true) {
                        return;
                    }

                    let newValue = response.content[attribute];

                    if (editable.get(0).nodeName.toLocaleLowerCase() === "select") {
                        newValue = editable.find('option:selected').text();
                    }

                    text.text(newValue);
                    saveBtn.addClass('hidden');
                    editBtn.removeClass('hidden');
                    editable.addClass('hidden');
                    text.removeClass('hidden');
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
                }
            });
        }
    </script>
@endpush
