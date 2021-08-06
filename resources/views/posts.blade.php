<x-layout>

@foreach ($posts as $post)
    <h1>
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    </h1>
    <p>
        {{ $post->body }}
    </p>
    <p>
        {{ $post->author }}
    </p>
    <p>
        {{ $post->publication_date }}
    </p>
@endforeach

</x-layout>
