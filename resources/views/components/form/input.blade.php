@props(['label', 'name', 'type' => 'text'])

<fieldset class="fieldset">
    <legend class="fieldset-legend">{{ $label }}</legend>
    <input wire:model.live="{{ $name }}" type="{{ $type }}" name="{{ $name }}"
        {{ $attributes->merge(['class' => 'input input-neutral w-full']) }}>
    @error($name)
        <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
    @enderror
</fieldset>
