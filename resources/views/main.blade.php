<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.scss')
        @vite('resources/js/app.js')

    </head>
    <body>
        <div id="app">
            <nav>
                <figure>
                    <a href="/">obrazek</a>                    
                </figure>
                <div class="nav-content">
                    <a href="#intro"></a>
                    <a href="#work"></a>
                    <a href="#form"></a>
                </div>
            </nav>

            <main>
                <section id="intro"></section>
                <section id="about"></section>
                <section id="work"></section>
                <section id="form">
                    <contact-form />
                </section>
                <section id="instagram">
                    <instagram />
                </section>
            </main>

            <footer></footer>
        </div>
    </body>
</html>
