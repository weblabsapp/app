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
        'content_css' => asset('vendor/tinymce/skins/ui/oxide/content.min.css'),
        'skin_url' => asset('vendor/tinymce/skins/ui/oxide'),
        'content_css_dark' => asset('vendor/tinymce/skins/ui/oxide-dark/content.min.css'),
        'skin_url_dark' => asset('vendor/tinymce/skins/ui/oxide-dark'),
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
