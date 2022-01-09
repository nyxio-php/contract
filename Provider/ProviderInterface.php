<?php

declare(strict_types=1);

namespace Nyx\Contract\Provider;

interface ProviderInterface
{
    /**
     * Process provider
     * @return void
     */
    public function process(): void;
}
