<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bio</title>
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body class="font-sans antialiased min-h-screen min-w-full flex justify-center items-center">
    <div class="sm:w-1/2 mx-2 text-center">
        <h1 class="font-playfair sm:text-5xl font-bold mb-5 text-2xl">Your content, curated. Let us showcase your best work, creations, and
            everything
            you want to share.</h1>
        <div class="font-playfair font-bold">
            @auth
                <a href="/dashboard" class="border border-black px-5 py-2 hover:bg-black hover:text-white">Dashboard</a>
            @else
                <a href="/login" class="border border-black px-5 py-2 hover:bg-black hover:text-white">Login</a>
                @if (Route::has('register'))
                    <a href="/register" class="border border-black px-5 py-2 hover:bg-black hover:text-white">Register</a>
                @endif
            @endauth
        </div>
    </div>
</body>

</html>
