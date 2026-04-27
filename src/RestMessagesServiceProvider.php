<?php

declare(strict_types=1);

namespace Victormgomes\RestMessages;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Victormgomes\RestMessages\Commands\RestMessagesCommand;

class RestMessagesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('rest-messages')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigration('create_rest_messages_table')
            ->hasCommand(RestMessagesCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(RestMessages::class, function () {
            return new RestMessages;
        });
    }
}
