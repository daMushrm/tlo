@props(['color'])
<div {{ $attributes->merge(['class' => 'min-h-[20vh] rounded-xl p-4 ']) }} style="background:{{ $color }};">
    {{ $slot }}
</div>
