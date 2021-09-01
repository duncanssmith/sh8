<x-layout>

    @php
        $pagetitle="Posts"; $index="/"; $create="/admin/posts/create";
    @endphp

    <x-pagelinks :pagetitle="$title" :index="$index" :create="$create" :admin="$userIsAdmin" />

        @if ($posts->count() > 0)
            <x-posts-grid :posts="$posts" />

            {!! empty($categories) ? $posts->links() : '' !!}
        @else
            <p class="text-center">No posts found.</p>
        @endif

</x-layout>
