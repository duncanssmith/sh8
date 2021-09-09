<x-layout>
    <h1>{{ $work->title }}, {{ $work->work_date }}</h1>
    <p>Select the pages you want this work to appear on.</p>
    <!-- if there are creation errors, they will show here -->
{{--    {{ HTML::ul($errors->all()) }}--}}
{{--    {{ Form::model($work, array('route' => array('save_assigned_work'), 'method' => 'POST')) }}--}}
{{--    {{ Form::hidden('work_id', $work->id) }}--}}

    <img src="{{ asset($work->thumbnail) }}" width="10%"/>&nbsp;

    {{--    <div class="form-group">--}}
    <form method="POST" action="/admin/category/save_assigned_work" enctype="multipart/form-data">
        @csrf
        @foreach ($categories as $category)
{{--            {{ Form::checkbox('groups_data[]', $group->id, in_array($group->id, $arr)) }}--}}
{{--            <x-form.checkbox name="{{ $category->name}}" values="['category_id' => {{$category->id}}, 'arr' => {{$arr}}, 'inArray' => {{in_array($category->id, $arr)}}]" />--}}
{{--            <x-form.checkbox name="{{ $category->name}}" values="{{$category->id}}" categoryIds="{{in_array($category->id, $arr)}}" arr="{{$arr}}" />--}}
            <x-form.checkbox name="{{ $category->name }}" id="{{ $category->id }}" checked="{{ isset($checked[$category->id]) ? true:false}}" />
        @endforeach
        <input name="work_id" type="hidden" value="{{$work->id}}"/>
        <x-submit>Assign</x-submit>
    </form>
{{--    </div>--}}
{{--    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}--}}
{{--    {{ Form::close() }}--}}
    <br>
{{--    @if ()--}}
        Work "{{ $work->title }}" will appear on pages:
{{--    @else--}}
        This work is not on any page.
{{--    @endif--}}
    <br>
    @foreach ($links as $link)
        {{ $link->name }}
        ({{ $link->id  }})
    @endforeach
</x-layout>
