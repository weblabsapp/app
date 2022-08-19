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
        }
    };
    $(function () {
        $('#subscribe-unsubscribe-form').submit(function (e) {
            e.preventDefault();
            formValidation.validate(this, constraints, "tooltip");
            let form = $(this);
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: jsonizeForm(form.get().pop()),
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
                }
            });
        });

        $(document).on('click', '.unsubscribe', function (e) {
            e.preventDefault();
            let token = $(this).data('token');
            if (typeof token == "undefined" || !token) {
                showToast({message: translate('invalid_token'), status: TOAST_STATUS.DANGER})
                return false;
            }
            $.ajax({
                type: "DELETE",
                url: $(this).attr("href"),
                data: JSON.stringify({
                    token: token
                }),
                dataType: "json",
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
                }
            })
        });
    });
</script>
@endpush
