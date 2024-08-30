<x-layout>
    <x-setting :heading="'Edit Post : ' . $category->title">
        <form method="post" action="/admin/categories/{{$category->id}}" enctype="multipart/form-data">
            @csrf
            {{-- the PATCH method is a request method in HTTP for making partial changes to an existing resource.(edit) --}}
            @method('PATCH')
            <x-form.input name="name" :value="old('name',$category->name)"/>

                <x-form.input name="slug" :value="old('slug',$category->slug)"/>

            <x-form.field>

            </x-form.field>

            <x-form.submit-button>Update</x-form.submit-button>



        </form>

    </x-setting>


</x-layout>
