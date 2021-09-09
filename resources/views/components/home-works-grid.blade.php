@props(['works'])

<div class="lg:grid lg:grid-cols-2">
    @foreach ($works as $work)
        <x-home-work-card :work="$work" class="col-span-3"></x-home-work-card>
    @endforeach
</div>
