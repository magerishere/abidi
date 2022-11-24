<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static PENDING()
 * @method static static ACCEPTED()
 * @method static static REJECTED()
 */
final class TopicStatusEnums extends Enum implements LocalizedEnum
{
    const REJECTED = 0;
    const ACCEPTED = 1;
    const PENDING = 2;
}
