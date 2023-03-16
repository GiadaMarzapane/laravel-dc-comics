<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Laravel DC Comics</title>

        @vite('resources/js/app.js')
    </head>
    <body>
        <header class="mb-4 text-center">
            <div class="container">
                <h1>
                    Laravel DC Comics
                </h1>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>