<x-app-layout>

    <div class="flex-grow flex flex-col justify-center items-center">

        <h1 class="text-4xl font-bold mb-2">Create Group</h1>

        <form method="POST" class="space-y-6"
            action="{{ route('students.store', ['grade' => $grade, 'group' => $group]) }}">
            @csrf

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Student Name"
                required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                placeholder="Student Email" required autocomplete="name" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                placeholder="Student Phone" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            <x-text-input id="parent_phone" class="block mt-1 w-full" type="text" name="parent_phone"
                placeholder="Parent Phone" required autocomplete="parent_phone" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-primary-button class="w-full ">
                <p>Save </p>
            </x-primary-button>


        </form>
    </div>
</x-app-layout>
