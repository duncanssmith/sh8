<x-layout>

    @php
         $pagetitle="Works"; $index="/works"; $create="/admin/works/create";
    @endphp

    <x-pagelinks :pagetitle="$title" :index="$index" :create="$create" :admin="$userIsAdmin" />

    @if ($works->count() > 0)
        <x-works-grid :works="$works" :admin="$userIsAdmin"/>

        {!! empty($works) ? '' : $works->links() !!}
    @else
        <p class="text-center">No works found.</p>
    @endif

</x-layout>

