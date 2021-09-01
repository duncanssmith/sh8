@props(['works', 'admin'])

<div class="lg:grid lg:grid-cols-2">
    @foreach ($works as $work)
        <x-work-card :work="$work" :admin="$admin" class="col-span-3"></x-work-card>
    @endforeach
</div>
