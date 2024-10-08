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

    <div class="flex-grow flex justify-center items-center px-5">

        <div class="rounded-lg border bg-card text-card-foreground  w-full max-w-xl mx-auto p-4 shadow-lg"
            data-v0-t="card">
            {{ $slot }}
        </div>
    </div>

</body>

</html>
