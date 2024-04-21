<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bio</title>
    @vite(['resources/css/app.css'])
</head>

<body class="font-sans antialiased min-h-screen min-w-full flex justify-center items-center">
    <div class="w-1/2 text-center">
        <h1 class="text-5xl font-bold mb-5">Your content, curated. Let us showcase your best work, creations, and
            everything
            you want to share.</h1>
        <div>
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
