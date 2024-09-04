@php
    $classes = 'p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 transition-all duration-300 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
