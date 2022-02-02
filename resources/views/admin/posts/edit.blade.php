<x-layout>

    <x-settings :heading="'Edit Post: ' . $post->title" >

        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PATCH')

            <x-form.input :value="old('title', $post->title)" name="title"></x-form.input>
            <x-form.input :value="old('slug', $post->slug)" name="slug"></x-form.input>
            <x-form.input :value="old('thumbnail', $post->thumbnail)" name="thumbnail" type="file"></x-form.input>
            <x-form.input :value="old('excerpt', $post->excerpt)" name="excerpt"></x-form.input>
            
            <x-form.textarea name="body">
                {{ old('body', $post->body) }}
            </x-form.textarea>

            <div class="mb-6">
                <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Category
                </label>

                <select name="category_id" id="category">
                    @foreach($categories as $category)
                        <option 
                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : 'false' }}
                            value="{{ $category->id }}"
                        >{{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <x-submit-button>Update</x-submit-button>

        </form>

    </x-settings>

</x-layout>