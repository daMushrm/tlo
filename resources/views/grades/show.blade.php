<x-app-layout>

    <section class="bg-white w-full min-h-20 p-5 shadow rounded-md flex flex-col gap-4 ">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            Groups
        </h2>
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
    <a class="fixed bottom-5 right-5 p-5 bg-green-400 rounded-lg z-20  " href="{{ route('groups.create', $grade) }}">

        + Add New Group
    </a>

</x-app-layout>
