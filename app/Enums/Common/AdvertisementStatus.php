<?php

namespace App\Enums\Common;

use App\Traits\Enum\EnumToArray;
use App\Traits\Enum\EnumToString;
use App\Traits\Enum\InvokableCases;

/**
 * @method static draft()
 * @method static published()
 * @method static pending()
 * @method static rejected()
 * @method static expired()
 */
enum AdvertisementStatus: int
{
    use EnumToArray;
    use EnumToString;
    use InvokableCases;

    case published = 1;
    case draft = 2;
    case pending = 3;
    case rejected = 4;
    case expired = 5;
}
