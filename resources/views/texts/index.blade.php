<x-layout>

    @if ($texts->count() > 0)
        <x-texts-grid :texts="$texts"/>

        {!! empty($texts) ? '' : $texts->links() !!}
    @else
        <p class="text-center">No texts found.</p>
    @endif

</x-layout>
