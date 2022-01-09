<?php

declare(strict_types=1);

namespace Nyx\Contract\Routing;

use Nyx\Routing\Group;

interface GroupCollectionInterface
{
    public function register(Group $group): static;

    public function get(string $name): ?Group;
}
