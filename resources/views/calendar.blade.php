<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Calender
        </h2>
    </x-slot>

    <div>
        @foreach ($target_groups as $group)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p>{{ $group }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-app-layout>