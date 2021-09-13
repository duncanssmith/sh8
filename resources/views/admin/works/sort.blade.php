<x-layout>

    <h1>Sort {{ $category->name }} works</h1>
    <p>Click and drag items below to arrange in the desired order</p>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

{{--    $table->string('title');--}}
{{--    $table->string('thumbnail')->nullable();--}}
{{--    $table->string('slug')->unique();--}}
{{--    $table->string('media')->nullable();--}}
{{--    $table->string('dimensions', 32)->nullable();--}}
{{--    $table->string('work_date', 32)->nullable();--}}

    <table class="table table-striped table-bordered category" data-categoryid="{{ $category->id}}">
        <thead>
        <tr>
            <td>Thumbnail</td>
            <td>Title</td>
            <td>Slug</td>
            <td>Media</td>
            <td>Dimensions</td>
            <td>Work date</td>
        </tr>
        </thead>
        <tbody id="sortable" class="sortable ui-sortable">
        @foreach($works as $key => $work)
            <tr class="ui-state-default ui-sortable-handle" data-id="{{ $work->id }}">

                <td><img src="{{ asset( $work->thumbnail )}}" width="15%"/></td>
                <td>{{ $work->title }}</td>
                <td>{{ $work->slug }}</td>
                <td>{{ $work->media }}</td>
                <td>{{ $work->dimensions }}</td>
                <td>{{ $work->work_date }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <x-form.cancel>Back</x-form.cancel>

    </div>

</x-layout>
