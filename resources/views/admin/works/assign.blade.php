<x-layout>
    <h1>{{ $work->title }}, {{ $work->work_date }}</h1>
    <p>Select the pages you want this work to appear on.</p>
    <img src="{{ asset($work->thumbnail) }}" width="10%"/>&nbsp;

    <form method="POST" action="/admin/category/save_assigned_work" enctype="multipart/form-data">
        @csrf
        @foreach ($categories as $category)
            <x-form.checkboxes name="{{ $category->name }}" id="{{ $category->id }}" checked="{{ isset($checked[$category->id]) ? true:false}}" />
        @endforeach
        <input name="work_id" type="hidden" value="{{$work->id}}"/>
        <x-form.submit>Assign</x-form.submit>
        <x-form.cancel>Cancel</x-form.cancel>

    </form>

    @if(count($linkNames) > 0)
        <h3 class="pt-4 text-gray-500 font-semibold">Linked to</h3>
        <p class="text-gray-400 text-sm">{!! implode(', ', $linkNames) !!}</p>
    @endif
</x-layout>
