@if(\Illuminate\Support\Facades\Auth::user())
<script type="text/javascript">
    $(function () {
        setInterval(() => {$.get('{{ get_route('web.refreshSession') }}');}, {{ (env('SESSION_LIFETIME') - 1) * 60 * 10000 }});
    });
</script>
@endif