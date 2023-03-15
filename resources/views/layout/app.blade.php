<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DC Comics</title>

        @vite('resources/js/app.js')
    </head>
    <body>
        <header>
            <h1>
                Laravel DC Comics
            </h1>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>