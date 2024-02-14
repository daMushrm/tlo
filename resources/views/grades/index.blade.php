<x-app-layout>

    <section class="bg-white w-full min-h-20 p-5 shadow rounded-md flex flex-col gap-4 ">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            Grades
        </h2>
        <x-cards-container>
            @foreach ($grades as $grade)
                <x-grade-card class="text-white shadow-2xl" :grade="$grade">
                    <x-slot name="head"> {{ $grade->name }}</x-slot>
                    Hi there
                </x-grade-card>
            @endforeach

        </x-cards-container>
    </section>
    <a class="fixed bottom-5 right-5 p-5 bg-green-400 rounded-lg z-20 " href="{{ route('grades.create') }}">


        + Add New Grade

    </a>

</x-app-layout>
