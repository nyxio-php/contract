<?php

declare(strict_types=1);

namespace Nyx\Contract\Event;

use Nyx\Event\Event;

interface EventDispatcherInterface
{
    public function addListener(string $eventName, \Closure|array $listener): static;

    public function getListeners(string $eventName): iterable;

    public function dispatch(string $eventName, ?Event $event = null): static;
}
