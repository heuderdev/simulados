@props(['label', 'name'])

<fieldset class="fieldset">
    <legend class="fieldset-legend">{{ $label }}</legend>
    <textarea wire:model="{{ $name }}" name="{{ $name }}"
        {{ $attributes->merge(['class' => 'textarea w-full']) }}></textarea>
    @error($name)
        <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
    @enderror
</fieldset>
