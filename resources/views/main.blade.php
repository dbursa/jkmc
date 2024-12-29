<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Frézování dřeva a plastů na CNC</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


        @vite('resources/css/app.scss')
        @vite('resources/js/app.js')

    </head>
    <body>
        <div id="app">            
            <main>
                <div class="intro-nav">
                    <nav>
                        <div class="container-jkmc">
                            <figure>
                                <a href="/">
                                    @include('svg.logo')
                                </a>                    
                            </figure>
                            <figure class="hamburger active">
                                @include('svg.hamburger')
                            </figure>
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
                    <section id="intro">
                        <div class="wrapper">                        
                            <h1>Frézování dřeva</h1>
                            <h1>a plastů na CNC</h1>
        
                            <div class="button-wrapper">                    
                                <a href="#about" class="btn-jkmc primary">
                                    <span>Zobrazit více</span>
                                </a>
                                <a href="#contact" class="btn-jkmc secondary">
                                    <span>Kontakty</span>
                                </a>
                            </div>
                        </div>
    
                        <div class="square">
                            <picture>
                                <source media="(max-width: 1199.99px)" srcset="{{ asset('/imgs/intro_cube.webp') }}">
                                <source media="(min-width: 1200px)" srcset="{{ asset('/imgs/intro_cube@2x.webp') }}">
                                <img src="{{ asset('/imgs/intro_cube@2x.webp') }}" alt="">
                            </picture>
                        </div>
                    </section>
                </div>
                <section id="about">
                    <div class="container-jkmc">
                        <p>"Tady ude nejake info alespon na dva radky o kusove vyrobe nebo nejaky hezky firemni slogan, ktery se pouziva."</p>
                    </div>
                </section>
                <section id="work">
                    <work-section />
                </section>

                <div class="form-contact-wrapper">
                    <div class="container-jkmc">
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
                    </div>
                </div>

                <section id="instagram">
                    <instagram />
                </section>
            </main>

            <footer>
                <div class="container-jkmc">
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
            <div class="arrow-up">
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                      </svg>                  
                </figure>
            </div>
        </div>
    </body>
</html>