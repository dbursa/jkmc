<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


        @vite('resources/css/app.scss')
        @vite('resources/js/app.js')

    </head>
    <body>
        <div id="app">
            <nav>
                <div class="container">
                    <figure>
                        <a href="/">
                            @include('svg.logo')
                        </a>                    
                    </figure>
                    <figure class="hamburger">
                        @include('svg.hamburger')
                    </figure>
                    <div class="nav-content">
                        <a href="#intro">Úvod</a>
                        <a href="#work">Naše služby</a>
                        <a href="#contact">Kontakty</a>
                    </div>
                </div>
            </nav>

            <main>
                <section id="intro">
                    <div class="wrapper">                        
                        <h1>Frézování dřeva</h1>
                        <h1>a plastů na CNC</h1>
    
                        <div class="button-wrapper">                    
                            <a href="#about" class="btn primary">
                                <span>Zobrazit více</span>
                            </a>
                            <a href="#contact" class="btn secondary">
                                <span>Kontakty</span>
                            </a>
                        </div>
                    </div>

                    <div class="waves">
                        <img src=" {{ asset('/imgs/svg/intro_waves.svg') }}" alt="">
                    </div>

                    <!-- FIXME: pridat obrazek pro retina -->
                    <div class="square">
                        <img src=" {{ asset('/imgs/intro_cube.webp') }}" alt="">
                    </div>
                </section>
                <section id="about">
                    <div class="container">
                        <p>Info o kusove vyrobe i vyrobe ve velkem</p>
                    </div>
                </section>
                <section id="work">
                    <work-section />
                </section>
                <section id="contact">
                    <contact-form />
                </section>
                <section id="instagram">
                    <instagram />
                </section>
            </main>

            <footer>
                <div class="container">
                    <div class="socials-wrapper">
                        <figure>
                            <a href="/">
                                @include('svg.logo')
                            </a> 
                        </figure>
                        <p>JKMC - frézování dřeva a plastů na CNC</p>
                        <div class="socials">
                            <a href="https://www.facebook.com/profile.php?id=100093443538789" target="_blank">
                                @include('svg.facebook')
                            </a> 
                            <a href="https://www.instagram.com/jkmc.cz/" target="_blank">
                                @include('svg.instagram')
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>{{ now()->year }}</p>
                    <a href="/">www.jkmc.cz</a>
                </div>
            </footer>
        </div>
    </body>
</html>
