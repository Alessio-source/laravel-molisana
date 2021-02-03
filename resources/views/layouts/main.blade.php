<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>La molisana</title>
    </head>
    <body>
        
        @include("partials.header")

        <main>
            @yield("main")
        </main>

        <footer>
            <p>footer</p>
        </footer>
    </body>
</html>