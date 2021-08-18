<x-layout>

    <h1>
        {{ $post->title }}
    </h1>
    <h2>
        {{ $post->slug }}
    </h2>
    <article>
        {{ $post->body }}
    </article>
    <p>
        Author: {{ $post->author }}
    </p>

    <a href="/posts" class="btn btn-info">Back</a>

</x-layout>
