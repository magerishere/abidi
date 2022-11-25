<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRoleEnums extends Enum implements LocalizedEnum
{
    const SUPERADMIN = 0;
    const ADMIN = 1;
    const DOCTOR = 2;
    const MEMBER = 3;
}
