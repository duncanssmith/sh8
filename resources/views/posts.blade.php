<x-layout>

@foreach ($posts as $post)
    <br/>
    <h1>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h1>
    <article>
        {{ $post->body }}
    </article>
    <p>
        {{ $post->author }}
    </p>
    <hr/>
@endforeach

</x-layout>
