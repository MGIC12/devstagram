<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel - @yield('titulo')</title>
    </head>
    <body class="bg-gray-100">
        <h1 class="text-4xl p-2 text-red-600 font-extrabold">Laravel</h1>
        <header class="p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">

            <h1 class="text-3xl font-black no-underline">
                <a href="/">DevStagram</a>
            </h1>

            <nav class="flex gap-2 items-center">
                <a href="/login" class="font-bold uppercase text-gray-600 text-sm">
                    Login
                </a>
                <a href="/register" class="font-bold uppercase text-gray-600 text-sm">
                    Sign Up
                </a>
            </nav>

            </div>

        </header>

        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">

            <p>DevStagram - Todos los derechos reservados <br>{{ date('Y') }}</p>

        </footer>
    </body>
</html>