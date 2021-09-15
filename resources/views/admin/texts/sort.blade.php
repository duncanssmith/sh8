<x-layout :uuid=$uuid :path="$path">

    <h1>Sort {{ $category->name }} texts</h1>
    <p>Click and drag items below to arrange in the desired order</p>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="py-4 px2">
        <table class="border category" data-categoryid="{{ $category->id}}">
            <thead>
            <tr>

                <th class="px-4 py-4 border border-solid text-gray-500"><i class="fa fa-sort"></i></th>
{{--                <th class="border border-solid ">Sort-order</th>--}}
{{--                <th class="border border-solid ">Id</th>--}}
                <th class="border border-solid px-4 text-gray-500">Title</th>
{{--                <th class="border border-solid">Slug</th>--}}
                <th class="border border-solid px-4 text-gray-500">Body</th>
                <th class="border border-solid px-4 text-gray-500">Author</th>
                <th class="border border-solid px-4 text-gray-500">Year</th>
                <th class="border border-solid px-4 text-gray-500">Description</th>
                <th class="border border-solid px-4 text-gray-500">Publication</th>
                <th class="border border-solid px-4 text-gray-500">Publication date</th>

            </tr>
            </thead>
            <tbody id="sortable" class="sortable ui-sortable">
            @foreach($texts as $key => $text)
                <tr class="ui-state-default ui-sortable-handle " data-id="{{ $text->id }}">

                    <td class="px-4 py-4 text-gray-500 "><i class="fa fa-random" title="sort"></i></td>
{{--                    <td class="border border-solid ">{{ $text->pivot->order }}</td>--}}
{{--                    <td class="border border-solid ">{{ $text->id }}</td>--}}
                    <td class="border border-solid py-2 px-3" title="id:[{{$text->id}}] order:[{{$text->pivot->order}}]">{{ $text->title }}</td>
{{--                    <td class="border border-solid px-3">{{ $text->slug }}</td>--}}
                    <td class="border border-solid px-3" title="{{ $text->body }}"><i class="fa fa-list text-gray-500" ></i></td>
                    <td class="border border-solid px-3">{{ $text->author }}</td>
                    <td class="border border-solid px-3">{{ $text->year }}</td>
                    <td class="border border-solid px-3">{{ $text->description }}</td>
                    <td class="border border-solid px-3">{{ $text->publication }}</td>
                    <td class="border border-solid px-3">{{ $text->publication_date }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <x-form.cancel>Back</x-form.cancel>

    </div>

</x-layout>
