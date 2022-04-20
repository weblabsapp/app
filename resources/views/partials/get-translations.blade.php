<script type="text/javascript">
    window.locale = window.locale ?? 'en';
    let url = "{{ get_route('api.getTranslation', ['locale' => ':locale']) }}/";
    url = url.replace(':locale', window.locale);
    let translationHash = localStorage.getItem('translation_hash');
    $(function () {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            data: "hash="+translationHash,
            context: this,
            async: false,
            headers: {
                "Accept": "application/json",
                "Content-Type": "application/json"
            },
            success: function (response) {
                if ('content' in response) {
                    if ('translations' in response.content) {
                        localStorage.setItem('translations', JSON.stringify(response.content.translations));
                    }
                    if ('hash' in response.content) {
                        localStorage.setItem('translation_hash', response.content.hash);
                    }
                    if ('locale' in response.content) {
                        localStorage.setItem('translation_locale', response.content.locale);
                    }
                }

            },
            error: function (xhr) {
                console.log(
                    'Can not get translation for locale ' + window.locale,
                    'Reason: ' + xhr.responseText
                );
            }
        })
    });
</script>
