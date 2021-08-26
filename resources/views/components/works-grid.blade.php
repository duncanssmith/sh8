@props(['works', 'images'])

<div class="lg:grid lg:grid-cols-6">
    @foreach ($works as $work)
        <x-work-card :work="$work" :image="$images[$work->id]" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-work-card>
        {{--        {{ dd($loop) }}--}}
    @endforeach
</div>
