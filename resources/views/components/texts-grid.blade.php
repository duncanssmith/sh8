@props(['texts'])

<div class="lg:grid lg:grid-cols-6">
    @foreach ($texts as $text)
        {{--        <x-text-card :text="$text" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-text-card>--}}
        <x-text-card :text="$text" class="col-span-6"></x-text-card>
    @endforeach
</div>
