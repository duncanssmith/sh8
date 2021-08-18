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
        Year: {{ $post->year }}
    </p>
    <p>
        Author: {{ $post->author }}
    </p>
    <p>
        Publication: {{ $post->publication }}
    </p>
    <p>
        Publication date: {{ $post->publication_date }}
    </p>
    <p>
        Description: {{ $post->description }}
    </p>

    <a href="/posts" class="btn btn-info">Back</a>

</x-layout>
