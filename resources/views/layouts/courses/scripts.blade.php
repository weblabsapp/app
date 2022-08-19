<script type="text/javascript">
    function disEnroll(courseTag) {
        let enroll = confirm('Are you sure want to dis-enroll this course? If you proceed, all progress related to this lesson will be removed.');
        if (!enroll) {
            return;
        }

        $('#dis-enroll-text').addClass('hidden');
        $('#dis-enroll-spinner').removeClass('hidden');

        let url = '{{ get_route('api.disEnrollCourse', ['courseTag' => ':courseTag']) }}'
            .replace(':courseTag', courseTag);

        $.ajax({
            type: 'DELETE',
            url: url,
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
                $('#dis-enroll-text').removeClass('hidden');
                $('#dis-enroll-spinner').addClass('hidden');
            }
        })
    }
</script>