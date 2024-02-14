<x-guest-layout>



    <h1 class="text-4xl font-bold mb-2">Login</h1>
    <p class="text-xl mb-8">welcome back!</p>

    <form method="POST" class="space-y-6" action="{{ route('login') }}">
        @csrf

        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="name@email.com"
            required />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
            placeholder="password" />
        <div class="flex items-center justify-between ">
            <div class="flex items-center space-x-2">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif
        </div>
        <x-primary-button class="w-full ">
            <p>login in</p>
        </x-primary-button>

        <div class="flex justify-center">
            <p class="text-sm">
                don’t have an account?
                <a class="font-bold text-md" href="{{ route('register') }}">
                    Sing Up
                </a>
            </p>
        </div>
    </form>

</x-guest-layout>
