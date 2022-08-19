@push('scripts')
    <script type="text/javascript">

        // Resend verification email
        function resendVerificationEmail(token) {
            let url = '{{ urldecode(get_route('api.resendVerifyEmail', ['token' => ':token'])) }}';
            url = url.replace(':token', token);

            loader('show');

            $.ajax({
                type: "POST",
                url: url,
                success: function (response, call = false) {
                    if (call !== true) {
                        return;
                    }
                    return {
                        message: translate(response.content.message),
                        status: TOAST_STATUS.SUCCESS
                    }
                },
                error: (xhr, call = false) => {
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
            });
        }

        userLocation.getLocation((position) => {
            let coordinates = {
                longitude: position.coords.longitude,
                latitude: position.coords.latitude
            };
            for (let coordinate in coordinates) {
                $('#signup-form').append('<input type="hidden" name="' + coordinate + '" value="' + coordinates[coordinate] + '"/>');
            }
        });

        let constraints = {
            email: {
                presence: {
                    message: "^" + translate('invalid_email_address')
                },
                email: {
                    message: "^" + translate('invalid_email_address')
                }
            },
            password: {
                presence: {
                    message: "^" + translate('password_required')
                },
                format: {
                    pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+,.\\\/;':"-]).{8,}$/,
                    message: "^" + translate('weak_password')
                }
            },
            password_confirmation: {
                presence: {
                    message: "^" + translate('password_confirm_required')
                },
                equality: {
                    attribute: "password",
                    message: "^" + translate('password_confirm_not_match_password')
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

        $(document).ready(function () {
            $('#signup-form').submit(function (e) {
                e.preventDefault();
                formValidation.validate(this, constraints, "tooltip");

                let form = $(this);
                let formData = JSON.parse(jsonizeForm(form.get().pop()));

                // Disable form inputs
                loader('show', form.get(0));

                formData['user_agent'] = navigator.userAgent;
                formData['country'] = userLocation.getCountry();
                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: JSON.stringify(formData),
                    success: function (response, call = false) {
                        if (call !== true) {
                            return;
                        }
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
                        loader('hide', form.get(0));
                    }
                });
            });

            $(".reveal-password").on('click', function () {
                $(this).find('svg').remove();
                let $pwd = $("input.reveal");
                if ($pwd.attr('type') === 'password') {
                    $pwd.attr('type', 'text');
                    $(this).append('<i class="fa fa-eye-slash"></i>');
                } else {
                    $pwd.attr('type', 'password');
                    $(this).append('<i class="fa fa-eye"></i>');
                }
            });
        });
    </script>
@endpush
