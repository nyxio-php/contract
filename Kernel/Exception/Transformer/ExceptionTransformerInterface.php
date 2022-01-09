<?php

declare(strict_types=1);

namespace Nyx\Contract\Kernel\Exception\Transformer;

interface ExceptionTransformerInterface
{
    public function toArray(\Throwable $exception): array|string;

    public function setDebug(bool $state): static;
}
