<x-layout>

@foreach ($posts as $post)
    <br/>
    <h1 class="text-2xl font-bold mt-8 mb-5">
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h1>
    <article class="my-5">
        {{ $post->body }}
    </article>
    <p class="my-5">
        {{ $post->user->alias }}
    </p>
    <hr/>
@endforeach

</x-layout>
