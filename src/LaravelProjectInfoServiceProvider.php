<?php

namespace KaanAtalay\LaravelProjectInfo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use KaanAtalay\LaravelProjectInfo\Commands\LaravelProjectInfoCommand;

class LaravelProjectInfoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-project-info')
            ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_laravel_project_info_table')
            // ->hasCommand(LaravelProjectInfoCommand::class)
            ->hasRoute("api");
    }
}
