<?php

return [

    'gallery' => [

        'name' => 'gallery',

        'menu' => [
            'url' => 'static-pages::admin::index',
            'caption' => 'Gallery',
            'icon' => 'fa fa-file-text-o',
            'active' => 'static-pages::admin::index',
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
