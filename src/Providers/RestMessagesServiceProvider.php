<?php

declare(strict_types=1);

namespace Victormgomes\RestMessages\Providers;

use Illuminate\Support\ServiceProvider;

class RestMessagesServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../messages', 'rest-messages');
    }
}
