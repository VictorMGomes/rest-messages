<?php

declare(strict_types=1);

namespace Victormgomes\RestMessages\Commands;

use Illuminate\Console\Command;

class RestMessagesCommand extends Command
{
    public $signature = 'rest-messages';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
