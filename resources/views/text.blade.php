<x-layout>

    <h1>Text</h1>
    <a href="/texts" class="text-purple-100 hover:text-purple-200 py-0 px-0">Back</a>

    <h1> {{ $text->title }} </h1>
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


</x-layout>
