<x-layout>

    <h1>
        {{ $text->title }}
    </h1>
    <h2>
        {{ $text->slug }}
    </h2>
    <article>
        {{ $text->body }}
    </article>
    <p>
        Author: {{ $text->author }}
    </p>
    <p>
        Year: {{ $text->year }}
    </p>
    <p>
        Description: {{ $text->description }}
    </p>
    <p>
        Publication: {{ $text->publication }}
    </p>
    <p>
        Publication date: {{ $text->publication_date }}
    </p>

    <a href="/texts" class="btn btn-info">Back</a>

</x-layout>
