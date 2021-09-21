<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Edit post">
            <form method="POST" action="/admin/post/{{ $post->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form.input name="title" :value="old('title', $post->title)" required />
                <x-form.input name="slug" :value="old('slug', $post->slug)" required />
                <div class="flex mt-6">
                    <div class="flex-1">
                        <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                    </div>
                    @if($post->thumbnail)
                        <img src="{{ asset( $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
                    @else
                        <h1>No image</h1>
                    @endif
                </div>
                <x-form.textarea name="excerpt" required>{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
                <x-form.textarea name="body" required>{{ old('body', $post->body) }}</x-form.textarea>
                <x-form.field>
                    <div class="border border-solid bg-gray-200 rounded-4lg px-8 py-8">
                    <x-form.label name="category"/>
                    <select name="category_id" id="category_id" required>
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category"/>
                    </div>
                </x-form.field>
                <x-form.submit>Update</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
        </x-setting>
    </section>
</x-layout>
