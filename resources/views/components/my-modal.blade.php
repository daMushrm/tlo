<div class="inline-block " x-data="{ open: false }">

    <div @click="open=!open">
        {{ $treger }}
        {{-- {{ $grade->name }} --}}
    </div>
    <div x-show="open"
        class=" fixed top-0  left-0 z-30 bg-black bg-opacity-45 duration-300 flex justify-center items-center w-screen h-screen">
        {{ $slot }}
        {{-- <x-form.grade.edit class="z-20" :grade="$grade" /> --}}
        <div class="z-10 absolute w-full h-full " @click="open=!open"></div>
    </div>
</div>
