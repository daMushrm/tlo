<div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full max-w-md" data-v0-t="card">
    <div class="flex space-y-1.5 p-6 flex-col">
        @if (isset($head))
            <div class="flex items-start gap-4">
                <h3 class="font-semibold  tracking-tight text-lg">
                    {{ $head }}
                    {{-- Introducing Shadcn: The Easiest Way to Build with JSX --}}
                </h3>
            </div>
        @endif

        <p class="text-muted-foreground text-sm">
            {{ $slot }}
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium distinctio consequuntur incidunt earum
            nostrum excepturi quibusdam! Unde ea quas nam cupiditate nostrum aliquam ullam omnis quo, aut error placeat
            vel?
        </p>
    </div>
    <div class="p-4">
        <p class="text-base">
        </p>
        <p class="text-base mt-4"></p>
    </div>
</div>
