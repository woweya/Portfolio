<x-layout>
    <main id="home">
        <header>
            <div class="intro" style="margin-bottom: 10em;">
                <h1 class="title d-flex justify-content-center align-items-center">WEB DEVELOPER<span
                        class="overlay"></span></h1>
                <div class="web-ux">WEB<br>UI/UX</div>
                <div class="circle">

                </div>
                <hr style="border-color: black; width: 30%; margin-left: 35%; margin-right: 35%; margin-top: 2em">
                <hr style="border-color: black; width: 15%; margin-left: 42%; margin-top: 0">
            </div>
            <div class="skills-bg w-100" style="position: absolute;">
                <img src="{{ asset('immagini/bg.png') }}" alt="">
            </div>
        </header>
        <div class="me-wrap" id="aboutme">
            <div class="containerbg w-100">
                <img src="{{ asset('immagini/circle-scatter-haikei.svg') }}" alt="">
            </div>
            <div class="personal-info container text-center d-flex justify-content-center align-items-center">
                <div class="left-side">
                    <h5>HI! <br> My name is </h5>
                    <h1>Fabiano <br> Buscemi</h1>
                </div>
                <img src="{{ asset('immagini/me.jpeg') }}" alt="">
                <div class="right-side">
                    <h2>I AM A FULLSTACK <br> WEB DEVELOPER</h2>
                </div>
            </div>
            <div class="description container text-center" style="width: 44%; color: var(--text-grey-color)">
                <p class="descrizione">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam temporibus fugit
                    porro voluptatum doloribus reprehenderit omnis ad vitae a at cum nulla culpa aut dignissimos,
                    repellat animi eligendi unde similique. </p>
                <div class="icons-social d-flex justify-content-center align-items-center">
                    <a href="https://github.com/woweya" target="_blank"><img src="{{ asset('immagini/github.png') }}"
                            alt=""></a>
                    <a href="https://www.instagram.com/fabjanxo/" target="_blank"><img
                            src="{{ asset('immagini/instagram.png') }}" alt=""></a>
                    <a href="https://www.linkedin.com/in/fabiano-buscemideveloper/" target="_blank"><img
                            src="{{ asset('immagini/linkedin.png') }}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="skills-info">
            <div class="skills container">
                <h1 class="title" data-aos="zoom-in" data-aos-duration="1000">SKILLS</h1>
                <p data-aos="fade-right" data-aos-duration="1000">This are my skills who helps me develop ideas and to
                    be a better Web Development.</p>


                <h1 class="title" style="color:white; font-size: 2em" data-aos="fade-up" data-aos-duration="1000"
                    id="front-end">Front-end:</h1>
                    <div class="container" id="mobile">
                        <div class="row">
                            <div class="col-md-6 offset-md-3" data-aos="zoom-in-up">
                                <h3 class="text-center text-white">HTML</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="text-center text-white">CSS</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="text-center text-white">JavaScript</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="text-center text-white">Bootstrap</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="text-center text-white">React</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="text-center text-white">Figma</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="wrap">
                    <div class="icons-wrap d-flex justify-content-center align-items-center text-center"
                        data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="figma d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/figma.png') }}" alt="">
                            <h1>Figma</h1>
                        </div>
                        <div class="bootstrap d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/bootstrap.png') }}" alt="">
                            <h1>Bootstrap</h1>
                        </div>
                        <div class="react d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/react.png') }}" alt="">
                            <h1>React</h1>
                        </div>
                        <div class="javascript d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/js.png') }}" alt="">
                            <h1>Javascript</h1>
                        </div>
                        <div class="html d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/html.png') }}" alt="">
                            <h1>HTML5</h1>
                        </div>
                        <div class="css3 d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/css-3.png') }}" alt="">
                            <h1>CSS3</h1>
                        </div>
                    </div>
                </div>

                <h1 class="title" style="color:white; font-size: 2em; margin-top:5em;" data-aos="zoom-in-up"
                    data-aos-duration="1000" id="back-end">Back-end:</h1>
                    <div class="container" id="mobile">
                        <div class="row">
                            <div class="col-md-6 offset-md-3" data-aos="zoom-in-up">
                                <h3 class="text-center text-white">PHP</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="text-center text-white">Laravel</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="text-center text-white">mySQL</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="wrap">
                    <div class="icons-wrap d-flex justify-content-center align-items-center text-center"
                        data-aos="flip-up" data-aos-duration="1000">
                        <div class="laravel d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/laravel.png') }}" alt="">
                            <h1>Laravel</h1>
                        </div>
                        <div class="php d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/php.png') }}" alt="">
                            <h1>PHP</h1>
                        </div>
                        <div class="mySQL d-flex justify-content-center align-items-center text-center">
                            <img src="{{ asset('immagini/mySQL.png') }}" alt="">
                            <h1>mySQL</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="skills-bg w-100" style="position: absolute; top: 42%;">
            <img src="{{ asset('immagini/bg-2.png') }}" alt="">
        </div>
        <div class="projects-info d-flex container mb-5" id="projects">
            <div class="project">
                <h1 class="title" data-aos="zoom-in" data-aos-duration="1000">PROJECTS</h1>
                <p class="description" data-aos="fade-right" data-aos-duration="1000">I've worked as a freelancer for
                    almost 2 years and this are my projects:</p>
                <div class="card" data-aos="fade-right" data-aos-duration="1000">
                    <img class="card-img-top" src="{{ asset('immagini/project1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text w-100">This was a personal project that I did to learn React and
                            Javascript. It is a News Website.</p>
                    </div>
                </div>
                <div class="button d-flex justify-content-center align-items-center">
                    <button class="btn" data-aos="flip-left" data-aos-duration="1000">View</button>
                </div>
            </div>

            <div class="wrapper">
                <div class="card" style= "margin-top:1em; min-height:510px; max-height:510px;" data-aos="fade-up"
                    data-aos-duration="1000" id="card">
                    <img class="card-img-top" src="{{ asset('immagini/project2.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is my first project I worked as a freelancer. This project consist on
                            a Website Radio of a famous Community of Gamers. This work took me 6 months and it's a
                            Front-end.</p>
                    </div>
                </div>
                <div class="card" style="margin-top: 10%" data-aos="fade-left" data-aos-duration="1000" id="card3">
                    <img class="card-img-top" src="{{ asset('immagini/project3.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This was my first portfolio ever, using a lot of JavaScript and CSS
                            Frameworks just to have fun and try to learn.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax">

            <div class="brower-bar container">
                <div class="dots"></div>
                <div class="dots"></div>
                <div class="dots"></div>
                <h1 class="w-100 text-center fs-2 mt-1" style="color: var(--text-grey-color); font-weight: 400">Visual
                    Studio Code</h1>
            </div>

            <div class="drbble-image"></div>

        </div>
        <div class="skills-bg w-100" style="position: absolute;">
            <img src="{{ asset('immagini/bg-3.png') }}" alt="">
        </div>
        <div class="contact-info container" id="contact">
            <h1 class="title" data-aos="zoom-in" data-aos-duration="1000">CONTACT</h1>
            <p class="description" data-aos="zoom-in" data-aos-duration="1000">Talking about buisness, feel free to
                contact me!</p>
            <div class="form text-center  d-flex justify-content-center align-items-center">
                <div class="skills-bg w-100" id="bg-mobile">
                    <img src="{{ asset('immagini/bg-mobile.png') }}" alt="">
                </div>
                <form class="w-50 text-center" action="{{ route('sendEmail') }} " method="POST">

                    @csrf
                    <x-status-email />
                    <div class="form-row">
                        <div class="form-group d-flex justify-content-between w-100">
                            <div class="form-group" style="width: 35%">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Insert your email.." name="email">

                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="width: 35%">
                                <label for="nome" class="text-white">Name:</label>
                                <input type="nome" class="form-control" id="nome"
                                    placeholder="Insert your name.." name="nome">
                                @error('nome')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Object:</label>
                            <input type="string" class="form-control" id="object"
                                placeholder="Object (Optional: e.g Job Offer)" name="subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message"
                            placeholder="Here you can write your message to me!" rows="3"
                            name="message"></textarea>
                        @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btnForm">Send</button>
                </form>
            </div>
        </div>
    </main>
    <footer>

        <footer class="footer text-white w-100">
            <div class="container py-3">
                <h2 class="text-center">End of page</h2>
                <p class="mb-0 text-center">Copyright © 2024. All rights reserved.</p>
                <p class="mb-0 text-center">Made with ❤️ by Fabiano Buscemi</p>
                <div class="icons-social d-flex justify-content-center align-items-center mt-3">
                    <img src="{{ asset('immagini/github.png') }}" alt="" class="me-3">
                    <img src="{{ asset('immagini/instagram.png') }}" alt="" class="me-3">
                    <img src="{{ asset('immagini/linkedin.png') }}" alt="">
                </div>
            </div>
        </footer>
</x-layout>
