<x-layout>

{{--        <x-panel class="max-w-sm mx-auto">--}}

        <h1 class="text-xl text-indigo-700 font-bold py-6">Create post</h1>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

{{--                ==========================================--}}
                <label for="thumbnail" class="block mb2 uppercase font-bold text-xs text-gray-700">
                </label>
                <input class="border border-gray-400 p-2 w-full text-gray-800"
                    type="file"
                    name="thumbnail"
                    id="thumbnail"
                    value="{{ old('thumbnail') }}"
                />

{{--                ==========================================--}}

                <label for="title" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Title
                </label>

                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="text"
                       name="title"
                       id="title"
                       value="{{ old('title') }}"
                       required
                />

                @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}

                <label for="slug" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Slug
                </label>

                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="slug"
                       id="slug"
                       value="{{ old('slug') }}"
                       required
                />

                @error('slug')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}

                <label for="excerpt" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Excerpt
                </label>

                <textarea class="border border-gray-400 p-2 w-full text-gray-800"
                       name="excerpt"
                       id="excerpt"
                       required
                >{{ old('excerpt') }}</textarea>

                @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}

                <label for="body" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>

                <textarea class="border border-gray-400 p-2 w-full text-gray-800"
                       name="body"
                       id="body"
                       required
                > {{ old('body') }}</textarea>

                @error('body')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}
                <label for="category" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Category
                </label>

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

                @error('category')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
{{--                ==========================================--}}

                <x-submit>Submit</x-submit>
                <x-cancel :route="$route">Cancel</x-cancel>

            </form>
{{--        </x-panel>--}}
</x-layout>
