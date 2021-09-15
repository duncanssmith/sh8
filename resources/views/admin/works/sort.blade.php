<x-layout :uuid=$uuid :path="$path">

    <h1>Sort {{ $category->name }} works</h1>
    <p>Click and drag items below to arrange in the desired order</p>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="py-4 px2">
        <table class="category py-4 px-2" data-categoryid="{{ $category->id}}">
            <thead>
            <tr>

                <th class="px-4 py-4 border border-solid text-gray-500"><i class="fa fa-sort"></i></th>
                <th class="border border-solid ">Sort-order</th>
                <th class="border border-solid ">Id</th>
                <th class="border border-solid">Thumbnail</th>
                <th class="border border-solid">Title</th>
                <th class="border border-solid">Slug</th>
                <th class="border border-solid">Media</th>
                <th class="border border-solid">Dimensions</th>
                <th class="border border-solid">Work date</th>

            </tr>
            </thead>
            <tbody id="sortable" class="sortable ui-sortable">
            @foreach($works as $key => $work)
                <tr class="ui-state-default ui-sortable-handle" data-id="{{ $work->id }}">

                    <td class="px-4 py-4 text-gray-500 "><i class="fa fa-random"></i></td>
                    <td class="border border-solid ">{{ $work->pivot->order }}</td>
                    <td class="border border-solid ">{{ $work->id }}</td>
                    <td class="border border-solid"><img src="{{ asset( $work->thumbnail )}}" width="15%"/></td>
                    <td>{{ $work->title }}</td>
                    <td>{{ $work->slug }}</td>
                    <td>{{ $work->media }}</td>
                    <td>{{ $work->dimensions }}</td>
                    <td>{{ $work->work_date }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <x-form.cancel>Back</x-form.cancel>

    </div>

</x-layout>

