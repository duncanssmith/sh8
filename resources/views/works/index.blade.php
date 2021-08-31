<x-layout>

    @php
         $pagetitle="Works"; $backlink="/"; $index="/works"; $create="/admin/works/create";
    @endphp

    <x-pagelinks :pagetitle="$title" :backlink="$backlink" :index="$index" :create="$create" :admin="$userIsAdmin" />

    @if ($works->count() > 0)
        <x-works-grid :works="$works"/>
    @else
        <p class="text-center">No works found.</p>
    @endif

</x-layout>

