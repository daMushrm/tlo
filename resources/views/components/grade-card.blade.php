@props(['grade'])

<div class="hover:-translate-y-1 duration-200">
    <a href="{{ route('grades.show', ['grade' => $grade]) }}" class="w-full">
        <div
            class="rounded-lg z-10 relative border text-card-foreground bg-white shadow-xl flex justify-between items-center w-full">
            <div class="p-6 w-full">
                @if (isset($head))
                <div class="flex justify-center w-full">
                    <h3 class="sm:text-3xl text-xl">
                        {{ $head }}
                    </h3>
                </div>
                @endif
            </div>
        </div>
    </a>
</div>