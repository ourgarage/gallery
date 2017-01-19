<?php

return [

    'gallery' => [

        'name' => 'gallery',

        'menu' => [
            'url' => 'static-pages::admin::index',
            'caption' => 'Gallery',
            'icon' => 'fa fa-picture-o',
            'active' => 'gallery::index',
            'subitems' => [
                [
                    'url' => 'gallery::pictures::index',
                    'caption' => 'Pictures',
                    'icon' => 'fa fa-file-picture-o',
                    'active' => 'gallery::pictures::index'
                ],
                [
                    'url' => 'gallery::categories::index',
                    'caption' => 'Categories',
                    'icon' => 'fa fa-tags',
                    'active' => 'gallery::categories::index'
                ]
            ]
        ]
    ],
];
