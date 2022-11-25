<?php

use App\Enums\TopicStatusEnums;
use App\Enums\UserPermissionEnums;
use App\Enums\UserRoleEnums;
use App\Enums\UserStatusEnums;

return [
    UserPermissionEnums::class => [
        UserPermissionEnums::CREATE_USER => 'ایجاد کاربر',
        UserPermissionEnums::READ_USER => 'مشاهده کاربر',
        UserPermissionEnums::UPDATE_USER => 'ویرایش کاربر',
        UserPermissionEnums::DELETE_USER => 'حذف کاربر',
        UserPermissionEnums::RESTORE_USER => 'بازگردانی کاربر',
        UserPermissionEnums::CREATE_TOPIC => 'ایجاد موضوع',
        UserPermissionEnums::READ_TOPIC => 'مشاهده موضوع',
        UserPermissionEnums::UPDATE_TOPIC => 'ویرایش موضوع',
        UserPermissionEnums::DELETE_TOPIC => 'حذف موضوع',
        UserPermissionEnums::RESTORE_TOPIC => 'بازگردانی موضوع',
    ],
    UserRoleEnums::class => [
        UserRoleEnums::SUPERADMIN => 'ادمین کل',
        UserRoleEnums::ADMIN => 'ادمین',
        UserRoleEnums::DOCTOR => 'دکتر',
        UserRoleEnums::MEMBER => 'کاربر'
    ],
    UserStatusEnums::class => [
        UserStatusEnums::REJECTED => 'رد شده',
        UserStatusEnums::ACCEPTED => 'تایید شده',
        UserStatusEnums::PENDING => 'در انتظار تایید',
    ],
    TopicStatusEnums::class => [
        TopicStatusEnums::REJECTED => 'رد شده',
        TopicStatusEnums::ACCEPTED => 'تایید شده',
        TopicStatusEnums::PENDING => 'در انتظار تایید',
    ],

];
