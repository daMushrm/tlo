@php
    //  Monday, Tuesday, Wednesday, Thursday, and Friday
    $options = [['value' => 'Monday', 'label' => 'Monday'], ['value' => 'Tuesday', 'label' => 'Tuesday'], ['value' => 'Wednesday', 'label' => 'Wednesday'], ['value' => 'Thursday', 'label' => 'Thursday'], ['value' => 'Friday', 'label' => 'Friday'], ['value' => 'Saturday', 'label' => 'Saturday'], ['value' => 'Sunday', 'label' => 'Sunday']];

@endphp
<x-app-layout>

    <div class="flex-grow flex flex-col justify-center items-center">

        <h1 class="text-4xl font-bold mb-2">Create Group</h1>

        <form method="POST" class="space-y-6" action="{{ route('groups.store', $grade) }}">
            @csrf

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Group Name"
                required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <label for="day">Select Day:</label>
            <select name="day" id="day">
                @foreach ($options as $option)
                    <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                @endforeach
            </select>

            <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" required
                autocomplete="time" />
            <x-primary-button class="w-full ">
                <p>Save </p>
            </x-primary-button>


        </form>
    </div>
</x-app-layout>
