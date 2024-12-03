<x-layout>

    <x-setting2 heading="Publish New Category">
        <form method="post" action="/admin/categories/store" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name"/>
            @error('name')
            <li class="alert alert-danger">{{ $message }}</li>
        @enderror
            <x-form.textarea name="slug"/>
            @error('slug')
            <li class="alert alert-danger">{{ $message }}</li>
        @enderror

            <x-form.submit-button>Add</x-form.submit-button>



        </form>

    </x-setting>


</x-layout>
