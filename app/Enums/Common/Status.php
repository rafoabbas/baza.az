<?php

namespace App\Enums\Common;

use App\Traits\Enum\EnumToArray;
use App\Traits\Enum\EnumToString;
use App\Traits\Enum\InvokableCases;

/**
 * @method static draft()
 * @method static published()
 */
enum Status: int
{
    use EnumToArray;
    use EnumToString;
    use InvokableCases;

    case draft = 2;
    case published = 1;
}
