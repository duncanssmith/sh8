@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700';
    if ($active) $classes .= ' bg-gray-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
