<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Comfort</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    body {
        margin: 0;
        font-family: 'Figtree', sans-serif;
    }

    .comfort-background {
        min-height: 100vh;
        width: 100%;
        background-image: url('/images/my-comfort-background.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 20px;
        box-sizing: border-box;
    }

    .auth-card {
        width: 100%;
        max-width: 480px;
        background: #f3cb93;
        padding: 35px;
        border-radius: 18px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.25);
    }

    .auth-card a {
        color: #D2691E !important;
        transition: color 0.3s ease;
    }

    .auth-card a:hover {
        color: #B85A19 !important;
        text-decoration: underline;
    }

    .auth-card button {
        background-color: #A52A2A !important;
        color: white !important;
        border-color: #A52A2A !important;
    }

    .auth-card button:hover {
        background-color: #8B2323 !important;
        border-color: #8B2323 !important;
    }

    @media (max-width: 600px) {
        .auth-card {
            padding: 24px;
        }
    }
</style>
</head>

<body>
    <main class="comfort-background">
        <div class="auth-card">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
