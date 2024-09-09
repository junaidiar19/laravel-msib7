<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

final class GenderEnum extends Enum
{
    #[Description('Pria')]
    const MAN = 1;

    #[Description('Wanita')]
    const WOMAN = 2;
}
