<x-layout>

    <h1 class="text-2xl font-bold mt-8 mb-5">
        {{ $post->title }}
    </h1>

    <h2 class="text-1xl font-bold mt-8 mb-5">
        {{ $post->slug }}
    </h2>

    <article>
        {{ $post->body }}
    </article>

    <p class="my-5">
        {{ $post->user->alias }}
    </p>

    <a href="/posts" class="font-bold text-purple-800 hover:text-purple-600 py-0 px-6">Back</a>

</x-layout>
