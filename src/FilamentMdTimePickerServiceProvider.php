<?php

namespace ArtMin96\FilamentMdTimePicker;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMdTimePickerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-md-time-picker';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('filament-md-time-picker-style', __DIR__.'/../resources/dist/filament-md-time-picker.css'),
            AlpineComponent::make('filament-md-time-picker', __DIR__.'/../resources/dist/filament-md-time-picker.js'),
        ], 'artmin96/filament-md-time-picker');
    }
}
