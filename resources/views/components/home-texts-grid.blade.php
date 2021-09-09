@props(['texts'])

<div class="lg:grid lg:grid-cols-6">
    @foreach ($texts as $text)
        <x-home-text-card :text="$text" class="col-span-3"></x-home-text-card>
    @endforeach
</div>
