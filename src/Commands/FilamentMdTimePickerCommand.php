<?php

namespace ArtMin96\FilamentMdTimePicker\Commands;

use Illuminate\Console\Command;

class FilamentMdTimePickerCommand extends Command
{
    public $signature = 'filament-md-time-picker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
