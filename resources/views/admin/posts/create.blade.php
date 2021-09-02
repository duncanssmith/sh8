<x-layout>

{{--        <x-panel class="max-w-sm mx-auto">--}}

        <h1 class="text-xl text-gray-700 font-bold py-6">Create post</h1>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title" />
                <x-form.file-upload name="thumbnail" />
                <x-form.input name="slug" />
                <x-form.input name="excerpt" />
                <x-form.textarea name="body" />

{{--                ==========================================--}}
                <x-form.label name="Category"/>
                <select class="border border-gray-400 p-2 w-full text-gray-800"
                          name="category_id"
                          id="category_id"
                          required
                >
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ( $categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('$category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach

                </select>

                <x-form.error name="category" />


                <x-form.submit>Submit</x-form.submit>
                <x-form.cancel :route="$route">Cancel</x-form.cancel>

            </form>
{{--        </x-panel>--}}
</x-layout>
