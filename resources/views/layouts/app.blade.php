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
    <header>
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="#">Menu Item 1</a></li>
            <li><a href="#">Menu Item 2</a></li>
            <li><a href="#">Menu Item 3</a></li>
        </ul>
    </nav>
</header>
    <body class="font-sans antialiased">
    <div class="container">
        @yield('content')
    </div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
...
<footer>
    <p>&copy; <?php echo date("Y"); ?> Mijn Website. Alle rechten voorbehouden.</p>
</footer>
...

</html>
