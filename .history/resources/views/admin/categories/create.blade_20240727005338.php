<x-layout>
    <x-setting heading="Publish New Post">
        <form method="post" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name"/>
    
            <x-form.textarea name="slug"/>
    
            <x-form.submit-button>Add</x-form.submit-button>
                
    
            
        </form>

    </x-setting>


</x-layout>