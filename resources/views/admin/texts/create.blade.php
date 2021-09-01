<x-layout>

{{--        <x-panel class="max-w-sm mx-auto">--}}

        <h1 class="text-xl text-gray-700 font-bold py-6">Create text</h1>
            <form method="POST" action="/admin/texts">
                @csrf

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

                <label for="body" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>

                <textarea class="border border-gray-400 p-2 w-full text-gray-800"
                       type="text"
                       name="body"
                       id="body"
                       value="{{ old('body') }}"
                       required
                ></textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}

                <label for="author" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Author
                </label>

                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="author"
                       id="author"
                       value="{{ old('author') }}"
                       required
                />

                @error('author')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}
{{--                <label for="category" class="block mb2 uppercase font-bold text-xs text-gray-700">--}}
{{--                    Category--}}
{{--                </label>--}}

{{--                <select class="border border-gray-400 p-2 w-full text-gray-800"--}}
{{--                          name="category_id"--}}
{{--                          id="category_id"--}}
{{--                          required--}}
{{--                >--}}

{{--                    @php--}}
{{--                        $categories = \App\Models\Category::all();--}}
{{--                    @endphp--}}

{{--                    @foreach ( $categories as $category)--}}
{{--                        <option--}}
{{--                            value="{{ $category->id }}"--}}
{{--                            {{ old('$category_id') == $category->id ? 'selected' : '' }}--}}
{{--                        >{{ ucwords($category->name) }}</option>--}}
{{--                    @endforeach--}}

{{--                </select>--}}

{{--                @error('category')--}}
{{--                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>--}}
{{--                @enderror--}}
{{--                ==========================================--}}
                <label for="year" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Year
                </label>

                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="year"
                       id="year"
                       value="{{ old('year') }}"
                       required
                />

                @error('year')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
{{--                ==========================================--}}
                <label for="description" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Description
                </label>

                <textarea class="border border-gray-400 p-2 w-full text-gray-800"
                       type="text"
                       name="description"
                       id="description"
                       value="{{ old('description') }}"
                       required
                ></textarea>

                @error('description')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
{{--                ==========================================--}}
                <label for="publication" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Publication
                </label>

                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="publication"
                       id="publication"
                       value="{{ old('publication') }}"
                       required
                />

                @error('publication')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
{{--                ==========================================--}}
                <label for="publication_date" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Publication date
                </label>

                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="publication_date"
                       id="publication_date"
                       value="{{ old('publication_date') }}"
                       required
                />

                @error('publication_date')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror


                <x-submit>Submit</x-submit>
                <x-cancel :route="$route">Cancel</x-cancel>

            </form>
{{--        </x-panel>--}}
</x-layout>
