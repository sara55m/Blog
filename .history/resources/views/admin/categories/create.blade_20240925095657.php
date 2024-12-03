<x-layout>

    <x-setting heading="Publish New Post">
        <form method="post" action="/admin/categories/store" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name"/>

            <x-form.textarea name="slug"/>

            <x-form.submit-button>Add</x-form.submit-button>



        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    </x-setting>


</x-layout>
