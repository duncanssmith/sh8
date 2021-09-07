<x-layout>

    @if ($works->count() > 0)
        <x-works-grid :works="$works"/>

        {!! empty($works) ? '' : $works->links() !!}
    @else
        <p class="text-center">No works found.</p>
    @endif

</x-layout>

