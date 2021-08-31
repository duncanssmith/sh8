<x-layout>

    @php
         $pagetitle="Texts"; $backlink="/"; $index="/texts"; $create="/admin/texts/create";
    @endphp

    <x-pagelinks :pagetitle="$title" :backlink="$backlink" :index="$index" :create="$create" :admin="$userIsAdmin" />

    @if ($texts->count() > 0)
        <x-texts-grid :texts="$texts"/>
    @else
        <p class="text-center">No texts found.</p>
    @endif

</x-layout>
