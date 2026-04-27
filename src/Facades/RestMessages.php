<?php

declare(strict_types=1);

namespace Victormgomes\RestMessages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Victormgomes\RestMessages\RestMessages
 */
class RestMessages extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Victormgomes\RestMessages\RestMessages::class;
    }
}
