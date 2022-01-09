<?php

declare(strict_types=1);

namespace Nyx\Contract\Validation\Handler;

use Nyx\Http\Exception\HttpException;
use Nyx\Validation\Handler\Validator;

interface ValidatorCollectionInterface
{
    public function attribute(string $attribute): Validator;

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
