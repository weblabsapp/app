@push('scripts')
<script type="text/javascript">
    let constraints = {
        email: {
            presence: {
                message: "^"+translate('invalid_email_address')
            },
            email: {
                message: "^"+translate('invalid_email_address')
            }
        },
        password: {
            presence: {
                message: "^"+translate('password_required')
            }
        }
    };
    $(document).ready(function () {
        $('#login-form').submit(function (e) {
            e.preventDefault();
            formValidation.validate(this, constraints, "tooltip");

            let form = $(this);
            let formData= JSON.parse(jsonizeForm(form.get().pop()));

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
                    setTimeout(() => {
                        window.location.href = getRedirectUri() || '{{ get_route('web.myAccountPage') }}';
                    }, 1000);
                    localStorage.setItem('access_token', response.content.access_token);
                    localStorage.setItem('remember_token', response.content.remember_token);
                    return {
                        message: translate(response.content.message),
                        status: TOAST_STATUS.SUCCESS
                    }
                },
                error: function (xhr, call = false) {
                    if (call !== true) {
                        return;
                    }
                    loader('hide', form.get(0));
                    return {
                        message: translate(...getErrorFromResponse(xhr)),
                        status: TOAST_STATUS.DANGER
                    }
                },
            });
        });
    });
</script>
@endpush