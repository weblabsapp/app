<div class="col-md-12">
    <div class="m-auto text-center">
        @if (!\App\Factories\Sandbox\Sandbox::getFactory()->isContainerReady($courseTag))
        <p>To start your learning journey, we have to create an isolated environment for you.</p>
        <p>Press "Create Sandbox" button:</p>
        <form id="create-sandbox-form" method="post" action="{{ get_route('api.createSandbox', ['courseTag' => $courseTag]) }}">
            @csrf
            <button class="btn btn-secondary">Create Sandbox</button>
        </form>
        @else
        <p>Your isolated environment is ready and waiting for you to start. Click "Next" to continue.</p>
        @endif
    </div>
</div>

<script type="text/javascript">
    $(function() {

        $('#create-sandbox-form').on('submit', function (e) {
            e.preventDefault();

            let form = $(this);
            loader('show', form.get(0));

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                success: function (response, call = false) {
                    if (call !== true) {
                        return;
                    }
                    form.parent().html('<p>Your isolated environment is ready and waiting for you to start. Click "Next" to continue.</p>');
                    localStorage.setItem('sandbox_id', response.content.sandbox_id);
                    loader('hide', form.get(0));
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