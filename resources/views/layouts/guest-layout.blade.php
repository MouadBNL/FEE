<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forum Ensak Entreprise</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite('resources/vue/assets/tailwind.css')
    </head>
    <body class="antialiased">
        <div id="app">
            <header>
                Guest layout
            </header>

            <main>
                {{ $slot ?? '' }}
            </main>

            <footer>

            </footer>
        </div>
        @vite('resources/vue/index.ts')
    </body>
</html>
