@props(['name', 'id', 'checked'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input class="border border-gray-200 p-2 w-sm rounded"
           name="categories_selected[{{ $id }}]"
           type="checkbox"
           {!! $checked ? 'checked' : '' !!}
           id="{{ $name }}"
        {{ $attributes(['value' => old($name)]) }}
    >

{{--    <p>Values: {{ $values }}</p>--}}
{{--    <p>category ids: {{ $categoryIds }}</p>--}}

    <x-form.error name="{{ $name }}"/>
</x-form.field>
