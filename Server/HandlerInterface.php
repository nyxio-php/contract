<?php

declare(strict_types=1);

namespace Nyxio\Contract\Server;

use Nyxio\Contract\Kernel\Request\RequestHandlerInterface;

interface HandlerInterface
{
    public function message(RequestHandlerInterface $requestHandler): \Closure;
}
