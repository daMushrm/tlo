<x-app-layout>
    <div class="flex-grow flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold mb-2">Create Grade</h1>
        <form method="POST" class="space-y-6" action="{{ route('grades.update', $grade->id) }}">
            @method('PUT')
            @csrf
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $grade->name }}"
                placeholder="Grade Name" required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-primary-button class="w-full">
                <p>Save</p>
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
