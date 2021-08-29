@props(['works'])

<div class="lg:grid lg:grid-cols-6">
    @foreach ($works as $work)
{{--        <x-work-card :work="$work" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-work-card>--}}
        <x-work-card :work="$work" class="col-span-6"></x-work-card>
    @endforeach
</div>
