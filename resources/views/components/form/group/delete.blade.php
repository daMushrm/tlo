<div {{ $attributes }} class="flex-grow flex flex-col justify-center items-center">
    <div class="bg-white p-10 rounded-md shadow-lg">
        <h1 class="text-4xl font-bold mb-2">Confirmation of Delete </h1>
        <p class="text-lg font-bold mb-2">
            Are you Sure that you want delete this group?
            All data in this group will be delete

        </p>
        <form action="{{ route('groups.destroy', ['grade' => $group->grade_id, 'group' => $group->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="group_id" value="{{ $group->id }}">
            <x-primary-button type="submit" class="bg-red-500 w-full rounded-md text-white hover:bg-red-400">
                <p>Delete </p>
            </x-primary-button>
        </form>
    </div>
</div>
