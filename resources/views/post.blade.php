<x-layout>

    <h1>
        {{ $post->title }}
    </h1>
    <h2>
        {{ $post->slug }}
    </h2>
    <p>
        {{ $post->body }}
    </p>
    <p>
        {{ $post->author }}
    </p>

</x-layout>
