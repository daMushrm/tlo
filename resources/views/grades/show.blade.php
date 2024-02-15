<x-app-layout>

    <section class="bg-white w-full min-h-20 p-10 shadow rounded-md flex flex-col gap-4 ">
        <div class="flex">
            <h2 class="font-semibold text-3xl mx-4 text-gray-800 leading-tight">
                Groups of <a href="{{ route('grades.edit', $grade) }}" class="underline">{{ $grade->name }}</a>
            </h2>
            <a href="{{ route('groups.create', $grade) }}">
                <x-primary-button>
                    Add +
                </x-primary-button>
            </a>
        </div>
        <x-cards-container>
            @if ($groups)
            @foreach ($groups as $group)
            <x-group-card class="text-white shadow-2xl" :group="$group">
                <x-slot name="head"> {{ $group->name }}</x-slot>
                Hi there
            </x-group-card>
            @endforeach
            @endif

        </x-cards-container>
    </section>
</x-app-layout>