@php
    //  Monday, Tuesday, Wednesday, Thursday, and Friday
    $options = [['value' => 'Monday', 'label' => 'Monday'], ['value' => 'Tuesday', 'label' => 'Tuesday'], ['value' => 'Wednesday', 'label' => 'Wednesday'], ['value' => 'Thursday', 'label' => 'Thursday'], ['value' => 'Friday', 'label' => 'Friday'], ['value' => 'Saturday', 'label' => 'Saturday'], ['value' => 'Sunday', 'label' => 'Sunday']];

@endphp
<div {{ $attributes }} class="flex-grow flex flex-col justify-center items-center">

    <div class="bg-white p-10 rounded-md shadow-lg">
        <h1 class="text-4xl font-bold mb-2">Edit Group</h1>

        <form method="POST" class="space-y-6"
            action="{{ route('groups.update', ['grade' => $group->grade_id, 'group' => $group->id]) }}">
            @method('PUT')
            @csrf

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Group Name"
                required autocomplete="name" value="{{ $group->name }}" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <label for="day">Select Day:</label>
            <select name="day" id="day">
                @foreach ($options as $option)
                    @if ($option['value'] === $group->day)
                        <option value="{{ $option['value'] }}" selected>{{ $option['label'] }}</option>
                    @else
                        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                    @endif
                @endforeach
            </select>

            <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" required
                autocomplete="time" value="{{ $group->time }}" />
            <div class="flex  gap-4">

                <x-primary-button class="w-full mb-6">
                    <p>Save </p>
                </x-primary-button>
            </div>


        </form>
        <div x-data="{ open: false }">

            <x-primary-button @click="open=!open" class="bg-red-500 w-full rounded-md text-white hover:bg-red-400">
                <p>Delete </p>
            </x-primary-button>
            <div x-show="open"
                class=" fixed top-0  left-0 z-30 bg-black bg-opacity-45 duration-300 flex justify-end items-end p-10 w-screen h-screen">
                <x-form.group.delete class="z-20 max-w-lg" :group="$group" />
                <div class="z-10 absolute w-full h-full " @click="open=!open"></div>
            </div>
        </div>
    </div>
</div>
</div>
