<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css'])

    {{-- EasyMDE --}}
    <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-base-100">
        <livewire:layout.navigation />
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
    @vite(['resources/js/app.js'])

    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
    <script>
        // Persistir preferência do tema no localStorage
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</body>

</html>