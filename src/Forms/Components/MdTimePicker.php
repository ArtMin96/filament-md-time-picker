<?php

declare(strict_types=1);

namespace ArtMin96\FilamentMdTimePicker\Forms\Components;

use Filament\Forms\Components\Concerns\CanBeDisabled;
use Filament\Forms\Components\Concerns\HasActions;
use Filament\Forms\Components\Concerns\HasAffixes;
use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Forms\Components\Field;

class MdTimePicker extends Field
{
    use CanBeDisabled;
    use HasActions;
    use HasAffixes;
    use HasPlaceholder;

    protected string $view = 'filament-md-time-picker::forms.components.md-time-picker';

    protected string $okLabel = 'Ok';

    protected string $cancelLabel = 'Cancel';

    protected string $timeFormat = 'hh:mm:ss';

    protected string $format = 'hh:mm:ss';

    protected ?string $minTime = null;

    protected ?string $maxTime = null;

    protected bool $hourPadding = false;

    protected bool $clearBtn = false;

    protected bool $is24Hour = false;

    public function cancelLabel(string $cancelLabel): static
    {
        $this->cancelLabel = $cancelLabel;

        return $this;
    }

    public function getCancelLabel(): string
    {
        return $this->cancelLabel;
    }

    public function okLabel(string $okLabel): static
    {
        $this->okLabel = $okLabel;

        return $this;
    }

    public function getOkLabel(): string
    {
        return $this->okLabel;
    }

    public function timeFormat(string $timeFormat): static
    {
        $this->timeFormat = $timeFormat;

        return $this;
    }

    public function getTimeFormat(): string
    {
        return $this->timeFormat;
    }

    public function format(string $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function hourPadding(): static
    {
        $this->hourPadding = true;

        return $this;
    }

    public function getHourPadding(): bool
    {
        return $this->hourPadding;
    }

    public function clearBtn(): static
    {
        $this->clearBtn = true;

        return $this;
    }

    public function getClearBtn(): bool
    {
        return $this->clearBtn;
    }

    public function is24Hour(): static
    {
        $this->is24Hour = true;

        return $this;
    }

    public function getIs24Hour(): bool
    {
        return $this->is24Hour;
    }
}
