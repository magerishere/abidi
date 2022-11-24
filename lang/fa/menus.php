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
                'title' => str_merge([__('crud.create'),__('back.topic')]),
                'href' => route('admin.topics.create'),
            ],
        ]
    ],
];
