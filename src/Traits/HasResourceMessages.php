<?php

declare(strict_types=1);

namespace Victormgomes\RestMessages\Traits;

use Illuminate\Database\Eloquent\Model;
use Victormgomes\RestMessages\Enums\CrudAction;
use Victormgomes\RestMessages\MessageGenerator;

trait HasResourceMessages
{
    protected function message(Model|string|null $model = null, ?CrudAction $action = null): string
    {
        return app(MessageGenerator::class)->generate($model, $action);
    }
}
