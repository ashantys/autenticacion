@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-cyan-50']) }}>
    {{ $value ?? $slot }}
</label>
