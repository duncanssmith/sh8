<x-layout>

@foreach ($texts as $text)
    <br/>
    <h1>
        <a href="/texts/{{ $text->slug }}">{{ $text->title }}</a>
    </h1>
    <article>
        {{ $text->body }}
    </article>
    <p>
        {{ $text->author }}
    </p>
    <p>
        {{ $text->year }}
    </p>
    <p>
        {{ $text->description }}
    </p>
    <p>
        {{ $text->publication }}
    </p>
    <p>
        {{ $text->publication_date }}
    </p>
    <hr/>
@endforeach

</x-layout>
