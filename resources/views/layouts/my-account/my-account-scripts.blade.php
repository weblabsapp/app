@push('scripts')
    <script type="text/javascript" src="{{ asset('js/croppie.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form-validation-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/blurry-load.min.js') }}"></script>
    <script type="text/javascript">
        new BlurryImageLoad().load();
    </script>
    <script type="text/javascript">
        let profile_attributes_constraints = {
            name: {
                presence: {
                    message: "^" + translate('invalid_name')
                }
            },
            username: {
                presence: {
                    message: "^" + translate('invalid_username')
                },
                format: {
                    pattern: '[A-Za-z0-9\_\-]+',
                    flags: 'i',
                    message: 'is not a valid username'
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

        let social_profiles_constraints = {
            social_profile_web: {
                url: {
                    schemes: ['http', 'https']
                }
            },
            social_profile_github: {
                format: {
                    pattern: '[A-Za-z0-9\_\-]+',
                    flags: 'i',
                    message: 'is not a valid username'
                }
            },
            social_profile_twitter: {
                format: {
                    pattern: '[A-Za-z0-9\_\-]+',
                    flags: 'i',
                    message: 'is not a valid username'
                }
            },
            social_profile_instagram: {
                format: {
                    pattern: '[A-Za-z0-9\\_\\-\\.]+',
                    flags: 'i',
                    message: 'is not a valid username'
                }
            },
            social_profile_facebook: {
                format: {
                    pattern: '[A-Za-z0-9\\_\\-\\.]+',
                    flags: 'i',
                    message: 'is not a valid username'
                }
            },
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

            formValidation.validate(editable.parent().get(0), {[attribute]: profile_attributes_constraints[attribute]});

            loader('show', editable.parent().get(0));

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
                    loader('hide', editable.parent().get(0));
                }
            });
        }

        $(function () {
            $('[rel="tooltip"]').tooltip();

            $('#save-social-profiles-btn').on('click', function () {
                $('#save-social-profiles-form').submit();
            });

            $('#save-social-profiles-form').on('submit', function (e) {
                e.preventDefault();
                let form = $(this).get(0);

                formValidation.validate(form, social_profiles_constraints);

                let formData = JSON.parse(jsonizeForm(form));

                loader('show', form);

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: JSON.stringify(formData),
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
                        loader('hide', form);

                    }
                })
            });

            // Start upload preview image
            var $uploadCrop,
                rawImg, files, file;

            $uploadCrop = $('#profile-image-cropper').croppie({
                viewport: {
                    width: 150,
                    height: 150,
                    type: 'circle'
                },
                boundary: {
                    width: '100%',
                    height: 400
                },
                mouseWheelZoom: false,
            });

            $('#update-profile-picture-icon input[type="file"]').on('change', function (e) {
                if ((files = this.files) && (file = files[0])) {
                    if (file.type.startsWith('image/')) {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            rawImg = e.target.result;
                            $('#update-avatar-modal').modal({
                                backdrop: 'static',
                                keyboard: false
                            }, 'show');
                        }
                        reader.readAsDataURL(file);
                    }
                }
            });

            $('#update-profile-image-button').on('click', function (e) {
                $uploadCrop.croppie('result', {
                    type: 'base64',
                    format: 'jpeg',
                    size: {width: 150, height: 150}
                }).then(function (resp) {
                    loader('show');
                    let base64Image = resp.replace(/^data:image\/(png|jpg|jpeg|gif);base64,/, "");
                    let blob = base64ToBlob(base64Image, 'image/jpeg');
                    let formData = new FormData();
                    formData.append('avatar', blob);
                    $.ajax({
                        type: 'POST',
                        url: '{{ get_route('api.updateAvatar') }}',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,
                        beforeSend: function (xhr){
                            xhr.setRequestHeader("Content-Type", undefined);
                        },
                        success: function (response, call = false) {
                            if (call !== true) {
                                return;
                            }
                            $('#profile-picture').attr('src', resp);
                            $('#update-avatar-modal').modal('hide');
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
                    })

                });
            });

            $('#update-avatar-modal').on('shown.bs.modal', function (e) {
                $uploadCrop.croppie('bind', rawImg);
            }).on('hidden.bs.modal', function (e) {
                $('#update-profile-picture-icon input[type="file"]').val('').change();
            });
        });
    </script>
@endpush
