<x-app-layout>

    <section class="bg-white w-full min-h-20 p-10 shadow rounded-md flex flex-col gap-4">
        <div class="flex items-center max-md:flex-col max-md:gap-2">
            <h2 class="font-semibold text-3xl mx-4 text-gray-800 leading-tight">
                Grades
            </h2>
            <div class="" x-data="{ open: false }">

                <x-primary-button @click="open=!open"> Add +

                </x-primary-button>
                <div x-show="open"
                    class=" fixed top-0  left-0 z-30 bg-black bg-opacity-45 duration-300 flex justify-center items-center w-screen h-screen">
                    <x-form.grade.create />
                    <div class="z-10 absolute w-full h-full " @click="open=!open"></div>
                </div>
            </div>
        </div>

        @foreach ($grades as $grade)
            <x-grade-card class="text-white shadow-2xl" :grade="$grade">
                <x-slot name="head">
                    <p>{{ $grade->name }}</p>
                </x-slot>
            </x-grade-card>
        @endforeach

    </section>

</x-app-layout>
