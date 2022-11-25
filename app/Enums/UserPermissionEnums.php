<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserPermissionEnums extends Enum implements LocalizedEnum
{
    const CREATE_USER = 'create_user';
    const READ_USER = 'read_user';
    const UPDATE_USER = 'update_user';
    const DELETE_USER = 'delete_user';
    const RESTORE_USER = "restore_user";

    const CREATE_TOPIC = 'create_topic';
    const READ_TOPIC = 'read_topic';
    const UPDATE_TOPIC = 'update_topic';
    const DELETE_TOPIC = 'delete_topic';
    const RESTORE_TOPIC = 'restore_topic';
}
