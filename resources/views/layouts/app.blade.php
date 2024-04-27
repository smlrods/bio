<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <!-- NAVBAR -->
    @include('layouts.navbar')

    <div class="md:grid md:grid-cols-[max-content_1fr] md:items-start">
        <!-- SIDEBAR -->
        @include('layouts.sidebar')

        <main id="main-content" class="flex-1 h-full p-6">
            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    {{ $header }}
                </header>
            @endif
            {{ $slot }}
        </main>
    </div>
</body>

</html>
