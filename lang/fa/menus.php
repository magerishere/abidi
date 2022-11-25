<?php

return [
    [
        'title' => __('back.topic'),
        'icon_class'  => 'fa fa-home',
        'children' => [
            [
                'title' => str_merge([__('crud.index'),__('back.topic')]),
                'href' => route('admin.topics.index'),
            ],
            [
                'title' => str_merge([__('crud.create'), __('back.topic')]),
                'href' => route('admin.topics.create'),
            ],
            [
                'title' => str_merge([__('crud.trash'), __('back.topic')]),
                'href' => route('admin.topics.trash.index'),
            ],
        ]
    ],
    [
        'title' => __('back.user'),
        'icon_class' => 'fa fa-home',
        'children' => [
            [
                'title' => str_merge([__('crud.index'), __('back.user')]),
                'href' => route('admin.users.index'),
            ],
            [
                'title' => str_merge([__('crud.create'), __('back.user')]),
                'href' => route('admin.users.create'),
            ],
            [
                'title' => str_merge([__('crud.trash'), __('back.user')]),
                'href' => route('admin.users.trash.index'),
            ],
        ]
    ],
];
