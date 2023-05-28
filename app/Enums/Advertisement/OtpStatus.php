<?php

namespace App\Enums\Advertisement;

use App\Traits\Enum\EnumToArray;
use App\Traits\Enum\EnumToString;
use App\Traits\Enum\InvokableCases;

/**
 * @method static verify()
 * @method static unVerify()
 */
enum OtpStatus: int
{
    use EnumToArray;
    use EnumToString;
    use InvokableCases;

    case verify = 1;
    case unVerify = 0;
}
