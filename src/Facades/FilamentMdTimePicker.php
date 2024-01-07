<?php

namespace ArtMin96\FilamentMdTimePicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArtMin96\FilamentMdTimePicker\FilamentMdTimePicker
 */
class FilamentMdTimePicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ArtMin96\FilamentMdTimePicker\FilamentMdTimePicker::class;
    }
}
