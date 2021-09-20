<x-layout>

    @if ($posts->count() > 0)
        <x-posts-grid :posts="$posts" />

        {!! empty($posts) ? '' : $posts->links() !!}
    @else
        <p class="text-center">No posts found.</p>
    @endif

</x-layout>
