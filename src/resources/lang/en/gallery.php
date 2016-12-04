<?php

return [

    'admin' => [
        'categories-index' => [
            'title' => 'Categories',
            'empty' => 'No categories',
            'table' => [
                'name' => 'Name',
                'descriptions' => 'Descriptions',
                'icon' => 'Icon',
                'pictures' => 'Pics',
                'options' => 'Options'
            ]
        ],
        'categories-create' => [
            'title' => 'Category create',
            'form' => [
                'name' => [
                    'title' => 'Name',
                    'placeholder' => 'Enter a category name'
                ],
                'description' => [
                    'title' => 'Description',
                    'placeholder' => 'Enter a category description'
                ],
                'icon' => [
                    'title' => 'Icon',
                    'placeholder' => 'Enter a category icon',
                    'info' => [
                        'title' => 'How to add a icon?',
                        'text' => 'To add an icon to select on of the icons <a data="tb" href="http://fontawesome.io/icons/"><strong>Font Awesome</strong></a> collection. <br> You should have something like this: <i><strong>fa fa-address-book</strong></i>'
                    ]
                ],
                'submit' => [
                    'create' => 'Create',
                    'update' => 'Update'
                ]
            ]
        ],
        'title' => [
            'pictures-index' => 'Pictures gallery',
            'categories-index' => 'Pictures categories',
            'categories-create' => 'Category create',
            'categories-update' => 'Category update'
        ],
        'button' => [
            'create' => 'Create',
            'tooltip' => [
                'edit' => 'Edit',
                'remove' => 'Remove'
            ]
        ],
        'notification' => [
            'insert-error' => 'An unexpected error occurred. Try again.',
            'insert-success' => 'New record successfully created',
            'update-success' => 'The record successfully updated',
            'destroy-error' => 'An unexpected error occurred. Try again.',
            'destroy-success' => 'The record successfully destroyed'
        ]
    ]

];