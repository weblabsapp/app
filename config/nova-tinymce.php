<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Options
    |--------------------------------------------------------------------------
    |
    | Here you can define the options that are passed to all NovaTinyMCE
    | fields by default.
    |
    */

    'default_options' => [
        'content_css' => sprintf('%s/vendor/tinymce/skins/ui/oxide/content.min.css', env('ASSET_URL')),
        'skin_url' => sprintf('%s/vendor/tinymce/skins/ui/oxide', env('ASSET_URL')),
        'content_css_dark' => sprintf('%s/vendor/tinymce/skins/ui/oxide-dark/content.min.css', env('ASSET_URL')),
        'skin_url_dark' => sprintf('%s/vendor/tinymce/skins/ui/oxide-dark', env('ASSET_URL')),
        'path_absolute' => '/',
        'plugins' => [
            'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
        ],
        'toolbar' => 'undo redo | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
        'relative_urls' => false,
        'use_lfm' => false,
        'use_dark' => true,
        'lfm_url' => 'filemanager',
    ],
];
