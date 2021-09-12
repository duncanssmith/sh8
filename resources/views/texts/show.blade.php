<x-layout>

    <div class="text-gray-700">

        <h1 class="text-gray-700 font-bold text-3xl lg:text-4xl mb-10">{{ $text->title }} </h1>

           <h2 class="text-gray-700 font-bold space-y-4 lg:text-lg leading-loose">
            {{ $text->slug }}
           </h2>

        <div class="text-gray-700 py-4 space-y-4 lg:text-lg leading-loose">
            {!! $text->body !!}
        </div>
        <p class="text-gray-700 py-4">
            <span class="font-bold">Author:</span> {{ $text->author }}
        </p>
        <p class="text-gray-700 py-4" >
            <span class="font-bold">Year:</span> {{ $text->year }}
        </p>
        <p class="text-gray-700 py-4" >
            <span class="font-bold">Description:</span> {!! $text->description !!}
        </p>
        <p class="text-gray-700 py-4" >
            <span class="font-bold">Publication:</span> {{ $text->publication }}
        </p>
        <p class="text-gray-700 py-4" >
            <span class="font-bold">Publication date:</span> {{ $text->publication_date }}
        </p>
    </div>

</x-layout>
