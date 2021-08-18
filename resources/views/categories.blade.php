<x-layout>

    @foreach ($categories as $category)
        <br/>
        <h1>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </h1>
        <p>
            {{ $category->slug }}
        </p>
        <hr/>
    @endforeach

</x-layout>
