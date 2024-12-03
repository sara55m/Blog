<x-layout>
    <x-setting heading="Publish New Post">
        <form method="post" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>

            <x-form.input name="thumbnail" type="file"/>

            <x-form.textarea name="excerpt"/>

            <x-form.textarea name="body"/>
            <x-form.field>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category">
                    Category
                </label>
                <select name="category_id" id="category_id">
                    @php
                        $categories=\App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}" {{ old('category_id')==$category->id ? 'selected' : ''}}>{{ucwords($category->name)}}</option>


                    @endforeach

                </select>
                @error('category_id')
                <span class="text-xs text-red-500 mt-2">{{$message}}</span>
                @enderror
            </div>
            </x-form.field>
            <x-form.field>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="tags">
                        Tags
                    </label>
            <select name="tags[]" id="tags" class="form-control" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            @error('tag_id')
            <span class="text-xs text-red-500 mt-2">{{$message}}</span>
            @enderror
        </div>
        </x-form.field>

            <x-form.submit-button>Publish</x-form.submit-button>



        </form>

    </x-setting>


</x-layout>
