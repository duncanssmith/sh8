<x-layout>

{{--        <x-panel class="max-w-sm mx-auto">--}}

        <h1 class="text-xl text-gray-700 font-bold py-6">Create page</h1>
            <form method="POST" action="/admin/categories">
                @csrf

                <label for="name" class="block mb2 uppercase font-bold text-xs text-gray-700">
                    Name
                </label>
                <input class="border border-gray-400 p-2 w-full text-gray-800"
                       type="string"
                       name="name"
                       id="name"
                       value="{{ old('name') }}"
                       required
                />
                @error('name')
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

                <x-submit>Submit</x-submit>
                <x-cancel :route="$route">Cancel</x-cancel>

            </form>
{{--        </x-panel>--}}
</x-layout>
