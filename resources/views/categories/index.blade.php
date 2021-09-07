<x-layout>

    @if ($categories->count() > 0)
        <x-categories-grid :categories="$categories"/>
    @else
        <p class="text-center">No categories found.</p>
    @endif

</x-layout>
