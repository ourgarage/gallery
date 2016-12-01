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
                    'url' => 'gallery::index',
                    'caption' => 'Pictures',
                    'icon' => 'fa fa-file-picture-o',
                    'active' => 'blog::admin::categories::index'
                ],
                [
                    'url' => 'blog::admin::posts::index',
                    'caption' => 'Categories',
                    'icon' => 'fa fa-tags',
                    'active' => 'blog::admin::posts::index'
                ]
            ]
        ],

        'menu-settings' => [
            'url' => 'static-pages::admin::get-settings',
            'caption' => 'Static pages settings',
            'icon' => 'fa fa-cog',
            'active' => 'static-pages::admin::get-settings',
        ],

        'default-settings' => [
            'meta-keywords' => 'Engin CMS, Laravel',
            'meta-description' => 'This package for Engin CMS',
            'meta-title' => 'Static Pages package',
        ],
    ],
];
