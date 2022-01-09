<?php

declare(strict_types=1);

namespace Nyx\Contract\Http;

use Nyx\Http\Request;
use Nyx\Http\Response;
use Psr\Http\Message\ResponseInterface;

interface MiddlewareInterface
{
    public function handle(Request $request, Response $response, \Closure $next): ResponseInterface;
}
