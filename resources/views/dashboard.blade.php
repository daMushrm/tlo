<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="flex flex-col gap-10  w-full">



        <section class="bg-white w-full min-h-20 p-5 shadow rounded-md flex flex-col gap-4 ">
            <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                Grades
            </h2>
            <x-cards-container>
                @for ($i = 0; $i < 10; $i++)
                    <x-g-card class="text-white shadow-2xl">
                        <x-slot name="head"> This is AWESOME!</x-slot>
                        Hi there
                    </x-g-card>
                @endfor


            </x-cards-container>
        </section>
        <section class="bg-white w-full h-20 p-5 shadow rounded-md flex gap-4">
            <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                Groups
            </h2>

        </section>
        <section class="bg-white w-full h-20 p-5 shadow rounded-md flex gap-4">
            <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                Students
            </h2>

        </section>
    </div>
    {{-- <section></section>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
