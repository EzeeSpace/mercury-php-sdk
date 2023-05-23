<?php

namespace EzeeSpace\Mercury;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EzeeSpace\Mercury\Commands\MercuryCommand;

class MercuryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mercury')
            ->hasConfigFile();
    }
}
