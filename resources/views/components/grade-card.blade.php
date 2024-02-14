@props(['grade'])

<div>
    <a href="{{ route('grades.show', ['grade' => $grade]) }}" class="w-full">
        <div
            class="rounded-lg z-10 relative border text-card-foreground bg-white shadow-xl flex justify-between items-center">
            <div class="p-6">
                @if (isset($head))
                <div class="flex items-center">
                    <h3 class="sm:text-3xl text-xl">
                        {{ $head }}
                    </h3>
                </div>
                @endif
            </div>
        </div>
    </a>
</div>