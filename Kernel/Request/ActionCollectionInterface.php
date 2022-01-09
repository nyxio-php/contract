<?php

declare(strict_types=1);

namespace Nyx\Contract\Kernel\Request;

use Nyx\Kernel\Request\ActionCache;

interface ActionCollectionInterface
{
    /**
     * @return ActionCache[]
     */
    public function all(): array;

    /**
     * @param string[] $actions
     * @return void
     * @throws \ReflectionException
     */
    public function create(array $actions): void;
}
