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
                    <figure class="hamburger active">
                        @include('svg.hamburger')
                    </figure>
                    <!-- TODO: pridat opacity, kdyz se meni ikony (aby neskakaly) -->
                    <figure class="close">
                        @include('svg.close')
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
                    <div class="contact-wrapper">
                        <h2>Kontakty</h2>
                        
                        <div class="text-wrapper">
                            <div class="address">
                                <p>Jaroslav Kobrle</p>
                                <p>Vlastibořice - Jivina 56/46344</p>
                                <a href="tel:+420 777 248 802">+420 777 248 802</a>
                                <a href="mailto:jaroslav.kobrle@jkmc.cz">jaroslav.kobrle@jkmc.cz</a>
                            </div>
                            <div class="ico">
                                <p>IČ: 05755263</p>
                                <p>DIČ: CZ8112102592</p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1641.1687554280081!2d15.059236439032215!3d50.62659546859247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sVlastibo%C5%99ice%20-%20Jivina%2056%2F46344!5e0!3m2!1sen!2see!4v1705139013161!5m2!1sen!2see" width="100%" height="375" style="border:0; filter:grayscale(100%)" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>
                <section id="form">
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
