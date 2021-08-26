@props(['works', 'images'])

<div class="lg:grid lg:grid-cols-6">
    @foreach ($works as $work)
        <x-work-card :work="$work" :image="$images[$work->id]" class="col-span-3"></x-work-card>
    @endforeach
</div>
