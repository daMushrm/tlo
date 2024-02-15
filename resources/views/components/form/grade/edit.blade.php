<div {{ $attributes }} class="flex-grow flex flex-col justify-center items-center">
    <div class="bg-white p-10 rounded-md shadow-lg">
        <h1 class="text-4xl font-bold mb-2">Edit Grade</h1>
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
        <div x-data="{ open: false }">

            <x-primary-button @click="open=!open" class="bg-red-500 w-full rounded-md text-white hover:bg-red-400">
                <p>Delete </p>
            </x-primary-button>
            <div x-show="open"
                class=" fixed top-0  left-0 z-30 bg-black bg-opacity-45 duration-300 flex justify-end items-end p-10 w-screen h-screen">
                <x-form.grade.delete class="z-20 max-w-lg" :grade="$grade" />
                <div class="z-10 absolute w-full h-full " @click="open=!open"></div>
            </div>
        </div>
    </div>
</div>
