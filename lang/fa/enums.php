<?php

use App\Enums\TopicStatusEnums;
use App\Enums\UserRoleEnums;

return [
    TopicStatusEnums::class => [
        TopicStatusEnums::REJECTED => 'رد شده',
        TopicStatusEnums::ACCEPTED => 'تایید شده',
        TopicStatusEnums::PENDING => 'در انتظار تایید',
    ],
    UserRoleEnums::class => [
        UserRoleEnums::SUPERADMIN => 'ادمین کل',
        UserRoleEnums::ADMIN => 'ادمین',
        UserRoleEnums::DOCTOR => 'دکتر',
        UserRoleEnums::MEMBER => 'کاربر'
    ]
];
