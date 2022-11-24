<?php

use App\Enums\TopicStatusEnums;

return [
    TopicStatusEnums::class => [
        TopicStatusEnums::REJECTED => 'رد شده',
        TopicStatusEnums::ACCEPTED => 'تایید شده',
        TopicStatusEnums::PENDING => 'در انتظار تایید',
    ]
];
