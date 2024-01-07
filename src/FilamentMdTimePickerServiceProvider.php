<?php

namespace ArtMin96\FilamentMdTimePicker;

use ArtMin96\FilamentMdTimePicker\Commands\FilamentMdTimePickerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMdTimePickerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-md-time-picker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-md-time-picker_table')
            ->hasCommand(FilamentMdTimePickerCommand::class);
    }
}
