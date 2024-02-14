<x-app-layout>

    <div class="flex-grow flex flex-col justify-center items-center">

        <h1 class="text-4xl font-bold mb-2">Create Group</h1>

        <form method="POST" class="space-y-6" action="{{ route('groups.store') }}">
            @csrf

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Group Name"
                required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-text-input id="grade_id" class="block mt-1 w-full" type="text" name="grade_id" placeholder="Grade id"
                required autocomplete="grade_id" />
            <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" required
                autocomplete="grade_id" />
            <x-primary-button class="w-full ">
                <p>Save </p>
            </x-primary-button>


        </form>
    </div>
</x-app-layout>
