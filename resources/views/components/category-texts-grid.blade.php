@props(['texts', 'admin'])

<div class="lg:grid lg:grid-cols-6">
    @foreach ($texts as $text)
        <x-text-card :text="$text" :admin="$admin" class="col-span-3"></x-text-card>
    @endforeach
</div>
