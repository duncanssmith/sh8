<x-layout>

    @php
        $pagetitle="Pages"; $backlink="/"; $index="/categories"; $create="/admin/category/create";
    @endphp

    <x-pagelinks :pagetitle="$pagetitle" :backlink="$backlink" :index="$index" :create="$create" :admin="$userIsAdmin" />

    @if ($categories->count() > 0)
        <x-categories-grid :categories="$categories"/>
    @else
        <p class="text-center">No categories found.</p>
    @endif

</x-layout>
