<?php

declare(strict_types=1);

namespace Nontre\Cqrs\Bus\Command;

interface CommandBus
{
    public function dispatch(Command $command): void;
}
