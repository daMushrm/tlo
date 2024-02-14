@props(['grade'])

<div class="relative hover:translate-x-2 hover:translate-y-2 duration-300">
    <a href="{{ route('grades.show', ['grade' => $grade]) }}">
        <div class="rounded-lg   z-10 relative border text-card-foreground  bg-white w-full max-w-md  shadow-xl">
            <div class="flex space-y-1.5 p-6 flex-col">
                @if (isset($head))
                    <div class="flex items-start gap-4">
                        <h3 class="font-semibold  tracking-tight text-lg">
                            {{ $head }}
                        </h3>
                    </div>
                @endif

                <p class="text-muted-foreground text-sm">
                    {{ $slot }}
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium distinctio consequuntur incidunt
                    earum
                    nostrum excepturi quibusdam! Unde ea quas nam cupiditate nostrum aliquam ullam omnis quo, aut error
                    placeat
                    vel?
                </p>
            </div>
            <div class="p-4">
                <p class="text-base">
                </p>
                <p class="text-base mt-4"></p>
            </div>
        </div>
    </a>
    <a class="min-h-16 bg-red-500  w-12  absolute right-2 -bottom-5 hover:translate-y-3  duration-300"
        href="{{ route('grades.edit', ['grade' => $grade]) }}"></a>
</div>
