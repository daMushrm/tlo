<x-app-layout>

    <section class="bg-white w-full min-h-20 p-10 shadow rounded-md flex flex-col gap-4">
        <div class="flex items-center max-md:flex-col max-md:gap-2">
            <h2 class="font-semibold text-3xl mx-4 text-gray-800 leading-tight">
                Grades
            </h2>

            <x-my-modal>

                <x-slot name="treger">
                    <x-primary-button>
                        Add +
                    </x-primary-button>
                </x-slot>

                <x-form.grade.create />
            </x-my-modal>
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
