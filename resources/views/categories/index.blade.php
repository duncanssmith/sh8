<x-layout>

    @php
        $pagetitle="Pages"; $index="/"; $create="/admin/categories/create";
    @endphp

    <x-pagelinks :pagetitle="$pagetitle" :index="$index" :create="$create" :admin="$userIsAdmin" />

    @if ($categories->count() > 0)
        <x-categories-grid :categories="$categories" :admin="$userIsAdmin"/>

{{--        {!! empty($categories) ? '' : $categories->links() !!}--}}
    @else
        <p class="text-center">No categories found.</p>
    @endif

</x-layout>
