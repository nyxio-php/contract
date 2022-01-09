<?php

declare(strict_types=1);

namespace Nyx\Contract\Validation\Handler;

use Nyx\Validation\Handler\Validator;

interface RulesCheckerInterface
{
    public function check(array $source, Validator $validator): array;
}
