@props(['texts'])

<div class="lg:grid lg:grid-cols-2">
    @foreach ($texts as $text)
        <x-text-card :text="$text" class="col-span-3"></x-text-card>
    @endforeach
</div>
