@php($toastID = rand(10, 99))
<div id="toast-{{ $toastID }}" class="toast toast-{{ $type ?? 'info' }}" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="{{ asset('images/code_16.png') }}" class="rounded mr-2" alt="Logo">
        <strong class="mr-auto">{{ $title }}</strong>
        <small><time class="timeago" datetime="{{ date('Y-m-d H:i:s', time()) }}"></time></small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        {{ $text }}
    </div>
</div>

<script>
    $(function () {
        $('#toast-{{ $toastID }}')
            .toast({
                autohide: false
            })
            .toast('show');

        $.timeago.settings.refreshMillis = 1000;
        $.extend($.timeago.settings.strings, {
            seconds: "A moment",
            minutes: "%dminutes",
            wordSeparator: " "
        });
        $('.timeago').timeago();
    });
</script>
