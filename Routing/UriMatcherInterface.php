<?php

declare(strict_types=1);

namespace Nyx\Contract\Routing;

use Nyx\Routing\Attribute\Route;
use Psr\Http\Message\ServerRequestInterface;

interface UriMatcherInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param Route $route
     * @return bool
     */
    public function compare(ServerRequestInterface $request, Route $route): bool;

    public function getQueryParams(): array;
}
