<x-layout>
    <x-setting :heading="'Edit Post : ' . $post->title">
        <form method="post" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            {{-- the PATCH method is a request method in HTTP for making partial changes to an existing resource.(edit) --}}
            @method('PATCH')
            <x-form.input name="title" :value="old('title',$post->title)"/>

            <div class="flex mt-6">
                <div class="flex-1>">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>
                </div>

                <img src="/storage/{{$post->thumbnail}}" alt="" class="rounded-xl ml-6" width="100">
            </div>

            <x-form.textarea name="excerpt">{{old('excerpt',$post->excerpt)}}</x-form.textarea>
            <x-form.textarea name="body">{{old('body',$post->body)}}</x-form.textarea>
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
                    <option value="{{$category->id}}" {{ old('category_id',$post->category_id)==$category->id ? 'selected' : ''}}>{{ucwords($category->name)}}</option>


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
                @php
                        $tags=\App\Models\Tag::all();
                    @endphp
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
                @endforeach
            </select>
            @error('tag_id')
            <span class="text-xs text-red-500 mt-2">{{$message}}</span>
            @enderror
        </div>
        </x-form.field>

            <x-form.submit-button>Update</x-form.submit-button>



        </form>

    </x-setting>


</x-layout>
