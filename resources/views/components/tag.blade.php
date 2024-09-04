@props(['size' => 'base'])

@php
    $classes ='bg-white/5  hover:bg-white/10 rounded-xl  text-center border border-transparent transition-all duration-300 group';

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm'; // Add any additional classes for small size
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-2xs'; // Add any additional classes for small size
    }
@endphp

<a href="#" class="{{ $classes }}">
    {{ $slot }}
</a>
