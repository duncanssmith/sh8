@props(['texts', 'images'])

<div class="lg:grid lg:grid-cols-6">
    @foreach ($texts as $text)
        <x-text-card :text="$text" class="col-span-3"></x-text-card>
    @endforeach
</div>
