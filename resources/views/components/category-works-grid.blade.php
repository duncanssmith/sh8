@props(['works'])

<!-- <div class="lg:grid lg:grid-cols-2"> -->
<div class="flex cols-4">
    @foreach ($works as $work)
        <div class="flex-1 bg-gray-200">
            <x-work-card :work="$work" class="col-span-3"></x-work-card>
        </div>
    @endforeach
</div>
