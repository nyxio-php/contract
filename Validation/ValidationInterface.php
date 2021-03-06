<?php

declare(strict_types=1);

namespace Nyxio\Contract\Validation;

use Nyxio\Http\Exception\HttpException;
use Nyxio\Validation\DTO\Field;

interface ValidationInterface
{
    public function field(string $name): Field;

    /**
     * @param array $source
     * @return array
     */
    public function getErrors(array $source): array;

    /**
     * @param array $source
     * @return bool
     *
     * @throws HttpException
     */
    public function validateOrException(array $source): bool;
}
