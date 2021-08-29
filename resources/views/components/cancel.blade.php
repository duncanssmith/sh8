@props(['route'])

<a href="{{ $route }}" class="bg-gray-200 text-gray-800 uppercase font-semibold text-xs py-2 px-10 mt-10 rounded-2xl hover:bg-gray-600">
    {{ $slot }}
</a>

