<x-layout>

    <h1>Sort {{ $category->name }} texts</h1>
    <p>Click and drag items below to arrange in the desired order</p>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered group" data-groupid="{{ $category->id}}">
        <thead>
        <tr>
            <td>Title</td>
            <td>Content</td>
            <td>Author</td>
            <td>Description</td>
            <td>Year</td>
        </tr>
        </thead>
        <tbody id="text-sortable" class="text-sortable">
        @foreach($texts as $key => $text)
            <tr class="ui-state-default" data-id="{{ $text->id }}">

                <td>{{ $text->title }}</td>
                <td title="{{ $text->body }}"><i class="fa fa-list"></i></td>
                <td>{{ $text->author }}</td>
                <td>{{ $text->description }}</td>
                <td>{{ $text->year }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

{{--    <a href="/pages" class="btn btn-xs btn-default"><i class="fa fa-arrow-left" style="color:#999;"></i> Back</a>--}}

    </div>

</x-layout>
