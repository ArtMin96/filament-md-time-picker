@php
    use Filament\Support\Facades\FilamentView;

    $prefixLabel = $getPrefixLabel();
    $suffixLabel = $getSuffixLabel();
    $prefixIcon = $getPrefixIcon();
    $suffixIcon = $getSuffixIcon();
    $prefixActions = $getPrefixActions();
    $suffixActions = $getSuffixActions();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <x-filament::input.wrapper
        :suffix="$suffixLabel"
        :prefix="$prefixLabel"
        :prefix-icon="$prefixIcon"
        :suffix-icon="$suffixIcon"
        :disabled="$isDisabled()"
        :prefix-actions="$prefixActions"
        :suffix-actions="$suffixActions"
    >
        <input type="text"
               x-ignore
               @if (FilamentView::hasSpaMode())
                   ax-load="visible"
               @else
                   ax-load
               @endif
               ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-md-time-picker', 'artmin96/filament-md-time-picker') }}"
               x-load-css="[@js(\Filament\Support\Facades\FilamentAsset::getStyleHref('filament-md-time-picker-style', package: 'artmin96/filament-md-time-picker'))]"
               x-data="mdTimePicker({
                   statePath: '{!! $getStatePath() !!}',
                   ref: $refs.timePicker,
                   component: @this,
                   okLabel: @js($getOkLabel()),
                   cancelLabel: @js($getCancelLabel()),
                   timeFormat: @js($getTimeFormat()),
                   format: @js($getFormat()),
                   hourPadding: @js($getHourPadding()),
                   clearBtn: @js($getClearBtn()),
                   is24hour: @js($getIs24Hour()),
               })"
               x-ref="timePicker"
               placeholder="{{ $getPlaceholder() }}"
               {{ $isDisabled() ? 'disabled' : '' }}
               {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
               @class([
                   'time-input-picker fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6',
               ])
        />
    </x-filament::input.wrapper>
</x-dynamic-component>
