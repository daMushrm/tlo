<x-app-layout>

    <section class="bg-white w-full min-h-20 p-10 shadow rounded-md flex flex-col gap-4 ">
        <div class="flex items-center">
            <h2 class="font-semibold text-3xl mx-4 text-gray-800 leading-tight">
                Grades
            </h2>
            <a href="{{ route('grades.create') }}">
                <x-primary-button>
                    Add +
                </x-primary-button>
            </a>
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