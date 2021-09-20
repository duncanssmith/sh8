---
title: Test yaml frontmatter
author: Duncan Smith
---

<x-layout>

    @if ($posts->count() > 0)

        <h1 class="font-semibold text-gray-500">{{ $title }}</h1>

        @foreach ($posts as $post)

            <h1 class="text-gray-500"> {{ $post->title }} </h1>
            <p class="text-gray-500">{{ $post->thumbnail }}</p>
            <img src="{{ asset($post->thumbnail) }}" width="10%"/>
            <p class="text-gray-500">{{ $post->slug }}</p>
            <p class="text-gray-600">{{ $post->excerpt }}</p>
            <p class="text-gray-600">{{ $post->body }}</p>
            <p class="text-gray-600">{{ $post->updated_at }}</p>
            <p class="text-gray-600">{{ $post->created_at }}</p>
            <p class="text-gray-500">{{ $post->category->name }}</p>

        @endforeach

    @else
        <p class="text-center">No posts found.</p>
    @endif

</x-layout>

