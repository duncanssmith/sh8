<x-layout>

{{--        <x-panel class="max-w-sm mx-auto">--}}

        <h1 class="text-xl text-indigo-700 font-bold py-6">Create work</h1>
            <form method="POST" action="/admin/works" enctype="multipart/form-data">
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
{{--                @error('thumbnail')--}}
{{--                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>--}}
{{--                @enderror--}}

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
                <label for="media" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Media
                </label>
                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="media"
                       id="media"
                       value="{{ old('media') }}"
                       required
                />
                @error('media')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}
                <label for="dimensions" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Dimensions
                </label>
                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="dimensions"
                       id="dimensions"
                       value="{{ old('dimensions') }}"
                       required
                />
                @error('dimensions')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

{{--                ==========================================--}}
                <label for="work_date" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Work date
                </label>
                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="work_date"
                       id="work_date"
                       value="{{ old('work_date') }}"
                       required
                />
                @error('work_date')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                {{--                ==========================================--}}

                <x-submit>Submit</x-submit>
                <x-cancel :route="$route">Cancel</x-cancel>

            </form>
{{--        </x-panel>--}}
</x-layout>
