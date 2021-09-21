<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Edit work">
            <form method="POST" action="/admin/work/{{ $work->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form.input name="title" :value="old('title', $work->title)" required />
                <x-form.input name="slug" :value="old('slug', $work->slug)" required />
                <div class="flex mt-6">
                    <div class="flex-1">
                        <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $work->thumbnail)" />
                    </div>
                    @if($work->thumbnail)
                        <img src="{{ asset( $work->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
                    @else
                        <h1>No image</h1>
                    @endif
                </div>
                <x-form.input name="media" :value="old('media', $work->media)" required />
                <x-form.input name="dimensions" :value="old('dimensions', $work->dimensions)" required />
                <x-form.input name="work_date" :value="old('work_date', $work->work_date)" required />
                <x-form.submit>Update</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
        </x-setting>
    </section>
</x-layout>
