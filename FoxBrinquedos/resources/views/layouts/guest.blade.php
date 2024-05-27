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
    <style>
        body {
            background: white;
            position: relative;
            overflow: hidden;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #43ADDA 10%, transparent 10%), 
                        radial-gradient(circle, #FFA800 10%, transparent 10%), 
                        radial-gradient(circle, #EFEBEB 10%, transparent 10%);
            background-position: 0 0, 50px 50px, 100px 100px;
            background-size: 150px 150px;
            z-index: -1;
            opacity: 0.5;
        }
        .transparent-form-container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparente */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Mantém a sombra */
            border-radius: 0.5rem; /* Mantém os cantos arredondados */
            overflow: hidden; /* Mantém o overflow hidden */
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="transparent-form-container w-full sm:max-w-md mt-6 px-6 py-4">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
