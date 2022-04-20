@push('scripts')
<script type="text/javascript">
    $(function () {
        $('#subscribe-unsubscribe-form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: jsonizeForm(form.get().pop()),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                success: function (response) {
                    return {
                        message: translate(response.content.message),
                        status: TOAST_STATUS.SUCCESS
                    }
                },
                error: function (xhr) {
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
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json"
                },
                success: function (response) {
                    return {
                        message: translate(response.content.message),
                        status: TOAST_STATUS.SUCCESS
                    }
                },
                error: function (xhr) {
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
