<x-app-layout>

    <section class="bg-white w-full min-h-20 p-10 max-md:p-4 min-w-[200px] shadow rounded-md flex flex-col gap-4 ">
        <div class="flex">
            <h2 class="font-semibold text-3xl mx-4 text-gray-800 leading-tight">
                Groups of
                <div class="inline-block " x-data="{ open: false }">

                    <button class="underline" @click="open=!open">
                        {{ $grade->name }}
                    </button>
                    <div x-show="open"
                        class=" fixed top-0  left-0 z-30 bg-black bg-opacity-45 duration-300 flex justify-center items-center w-screen h-screen">
                        <x-form.grade.edit class="z-20" :grade="$grade" />
                        <div class="z-10 absolute w-full h-full " @click="open=!open"></div>
                    </div>
                </div>

            </h2>
        </div>
        <x-cards-container>
            @if ($groups)
                @foreach ($groups as $group)
                    <div x-data="{ open: false }">
                        {{-- group-card --}}
                        <div class="duration-300 relative hover:translate-y-2">
                            <x-group-card class="text-white shadow-2xl" :group="$group">
                                <x-slot name="head"> {{ $group->name }}</x-slot>
                                Hi there
                            </x-group-card>
                            <div>
                                <x-primary-button
                                    class=" rounded-full  absolute right-0 bottom-0 text-3xl m-4 duration-300"
                                    @click="open=!open">
                                    EDIT
                                </x-primary-button>
                            </div>
                        </div>
                        {{-- edit group modal --}}
                        <div x-show="open"
                            class=" absolute top-0  left-0 z-20 bg-black bg-opacity-45 duration-300 flex justify-center items-center w-screen h-screen">
                            <x-form.group.edit class="z-20" :group="$group" />
                            <div class="z-10 fixed w-full h-full " @click="open=!open"></div>
                        </div>
                    </div>
                @endforeach
            @endif

        </x-cards-container>
    </section>
</x-app-layout>
