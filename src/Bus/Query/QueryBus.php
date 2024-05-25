<?php

declare(strict_types=1);

namespace Nontre\Cqrs\Bus\Query;

interface QueryBus
{
    public function ask(Query $query): ?Response;
}
