<?php

declare(strict_types=1);

namespace Nyxio\Contract\Kernel\Server\Job\Async;

use Nyxio\Kernel\Server\Job\TaskData;
use Swoole\Http\Server;

interface TaskHandlerInterface
{
    public function handle(Server $server, TaskData $taskData): void;
}
