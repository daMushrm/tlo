<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased min-h-screen flex flex-col">
    <x-non-auth-navigation />


    <section class="w-fill   flex-grow flex items-center   justify-center">
        <div class="bg-center bg-no-repeat bg-cover -z-10 bg-black left-0 top-0  absolute h-full w-full "
            style="background-image: url('textured-background-1.png')">
        </div>


        <div class=" px-4 md:px-6  z-10 rounded-lg max-lg:bg-transparent max-lg:drop-shadow-2xl">
            <div class=" flex flex-col items-center  text-center">
                {{-- <img src="/textured-background-1.png" width="1110" height="400" alt="Hero"
                        class="absolute inset-0 z-[-1] object-cover object-top rounded-b-xl filter brightness-90 blur-xl"
                        style="aspect-ratio: 1110 / 400; object-fit: cover;"> --}}
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none">
                        The Art of Management
                    </h1>
                    <p class="mx-auto max-w-[700px] text-black md:text-xl dark:text-black">
                        Experience the finest teacher management tools
                    </p>
                </div>
            </div>
            {{-- <div class="w-full max-w-sm space-y-2">
                    <form class="flex space-x-2"><input
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 max-w-lg flex-1"
                            placeholder="Enter your email" type="email"><button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"
                            type="submit">Subscribe</button></form>
                </div> --}}
        </div>
    </section>
</body>

</html>
