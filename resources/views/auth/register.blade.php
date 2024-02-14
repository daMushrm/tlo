<x-guest-layout>



    <h1 class="text-4xl font-bold mb-2">Sign up</h1>
    <p class="text-md mb-8">Come for what you love, Stay for what you discover! </p>
    <form method="POST" class="space-y-6" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        {{-- <x-input-label for="name" :value="__('Name')" /> --}}
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
            autocomplete="name" placeholder="username" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <!-- Email Address -->
        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            placeholder="name@email.com" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <!-- Password -->
        {{-- <x-input-label for="password" :value="__('Password')" /> --}}

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="new-password" placeholder="password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Confirm Password -->
        {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required autocomplete="new-password" placeholder="confirm password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <x-primary-button class=" w-full my-4">
            Register
        </x-primary-button>
        <div class="flex justify-center items-center">
            <p class="text-sm">
                Already registered?
                <a class="font-bold text-md" href="{{ route('login') }}">
                    Login
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
