<x-layout>
    <h1>{{ $text->title }}, {{ $text->year }}</h1>
    <p>{{$text->body}}</p>
    <p>{{$text->description}}</p>
    <p>{{$text->author}}</p>
    <p>Select the pages you want this text to appear on.</p>

    <form method="POST" action="/admin/category/save_assigned_text" enctype="multipart/form-data">
        @csrf
        @foreach ($categories as $category)
            <x-form.checkboxes name="{{ $category->name }}" id="{{ $category->id }}" checked="{{ isset($checked[$category->id]) ? true:false}}" />
        @endforeach
        <input name="text_id" type="hidden" value="{{$text->id}}"/>
        <x-form.submit>Assign</x-form.submit>
        <x-form.cancel>Cancel</x-form.cancel>
    </form>

    @if(count($linkNames) > 0)
        <h3 class="pt-4 text-gray-500 font-semibold">Linked to</h3>
        <p class="text-gray-400 text-sm">{!! implode(', ', $linkNames) !!}</p>
    @endif
</x-layout>
