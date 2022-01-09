<?php

declare(strict_types=1);

namespace Nyx\Contract\Config;

interface ConfigInterface
{
    public function get(string $params, mixed $default = null): mixed;

    public function addConfig(string $alias, array $configData): static;
}
