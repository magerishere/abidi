<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SessionTypeEnums extends Enum
{
    const SUCCESS = 'success';
    const DANGER = 'danger';
    const WARNING = 'warning';
}
