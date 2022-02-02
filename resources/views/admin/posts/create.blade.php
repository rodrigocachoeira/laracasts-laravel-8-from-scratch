<x-layout>

    <x-settings heading="Publish new Post" >

        <form action="/admin/posts" method="POST" enctype="multipart/form-data">

            @csrf

            <x-form.input name="title"></x-form.input>
            <x-form.input name="slug"></x-form.input>
            <x-form.input name="thumbnail" type="file"></x-form.input>
            <x-form.input name="excerpt"></x-form.input>
            
            <x-form.textarea name="body"></x-form.textarea>

            <div class="mb-6">
                <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Category
                </label>

                <select name="category_id" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <x-submit-button>Publish</x-submit-button>

        </form>

    </x-settings>

</x-layout>