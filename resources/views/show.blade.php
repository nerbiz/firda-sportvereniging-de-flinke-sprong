<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        <style>
            body {
                font-family: 'Georgia', serif;
                line-height: 1.8;
                background-color: seagreen;
            }

            .container {
                margin: 0 auto;
                padding: 20px;
                max-width: 800px;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.8);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Teams en spelers</h1>

            <p>Hier is de <a href="{{ route('page.home') }}">pagina waar de opdracht staat</a>.</p>

            {{-- Zo ziet een comment eruit in de Blade template engine --}}
            {{-- Laat op deze pagina alle teams en spelers zien --}}
        </div>
    </body>
</html>
