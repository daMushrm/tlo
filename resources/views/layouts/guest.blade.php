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

<body class="font-sans text-gray-900 antialiased flex flex-col min-h-screen">
    <x-non-auth-navigation />
    <div class="flex flex-grow">
        <div style="background-image: url(/textured-background-4.png)"
            class="w-1/2 max-md:hidden bg-black bg-cover bg-no-repeat"></div>
        <div class="w-1/2  max-md:w-full flex flex-col justify-center px-16 md:items-center min-w-[350px]">
            <div class="md:min-w-[50%]">
                {{ $slot }}
            </div>
        </div>

    </div>
</body>

</html>
