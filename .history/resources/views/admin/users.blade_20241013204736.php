<x-layout>
    <x-setting2 heading="Manage Categories">
        <table class="border-collapse w-full">

            <tbody>
                @foreach ($users as $user )
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            {{$user->name}}
                    </td>

                    <td class="lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        {{$user->email}}
                </td>



                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
    </x-setting2>
</x-layout>