<?php

namespace Nyx\Contract\Server;

use Nyx\Contract\Kernel\Request\RequestHandlerInterface;

interface HandlerInterface
{
    public function message(RequestHandlerInterface $requestHandler): \Closure;
}
