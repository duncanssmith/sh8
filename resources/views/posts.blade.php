<x-layout>

@foreach ($posts as $post)
    <br/>
    <h1>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
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
    <hr/>
@endforeach

</x-layout>
