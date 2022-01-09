<?php

declare(strict_types=1);

namespace Nyx\Contract\Provider;

interface ProviderDispatcherInterface
{
    /**
     * @param string[] $providers
     * @return void
     */
    public function dispatch(array $providers = []): void;
}
