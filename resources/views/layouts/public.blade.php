<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title', config('app.name', 'CIDECH'))</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet"/>

    {{-- Material Symbols --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    {{-- Scroll offset perfecto para header fijo --}}
    <style>
        :root { --nav-h: 80px; } /* header h-20 = 80px */

        html {
            scroll-behavior: smooth;
            scroll-padding-top: calc(var(--nav-h) + 18px);
        }

        section[id] {
            scroll-margin-top: calc(var(--nav-h) + 18px);
        }

        @media (min-width: 1024px) {
            html { scroll-padding-top: calc(var(--nav-h) + 28px); }
            section[id] { scroll-margin-top: calc(var(--nav-h) + 28px); }
        }
    </style>
</head>

<body class="min-h-screen bg-background-dark text-white selection:bg-primary selection:text-white overflow-x-hidden">
    @include('partials.header')

    <main class="min-h-[calc(100vh-80px)]">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>