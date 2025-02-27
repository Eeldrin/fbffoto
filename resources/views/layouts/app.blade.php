<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Bilgileri -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Sayfa Başlığı -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Yazı Tipleri -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- CSS ve Scriptler -->
    <!-- Laravel Vite ile stil ve script dosyaları -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/index.js'])

    <!-- FontAwesome (ikonlar için) -->
    <script src="https://kit.fontawesome.com/bf4e5e20a8.js" crossorigin="anonymous"></script>

    <!-- Alpine.js (interaktif işlemler için) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <!-- Ana Konteyner -->
    <div class="min-h-screen">

        <!-- Gezinti Menüsü (isteğe bağlı, şu an devre dışı) -->
        {{-- @include('layouts.navigation') --}}

        <!-- Sayfa Başlığı -->
        {{-- @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset --}}

        <!-- Sayfa İçeriği -->
        <main>
            {{-- {{ $slot }} --}}
            @yield('content')
        </main>

    </div>
</body>

</html>
