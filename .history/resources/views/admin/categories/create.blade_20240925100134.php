<x-layout>

    <x-setting2 heading="Publish New Category">
        <form method="post" action="/admin/categories/store" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name"/>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <x-form.textarea name="slug"/>
            @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <x-form.submit-button>Add</x-form.submit-button>



        </form>

    </x-setting>


</x-layout>
