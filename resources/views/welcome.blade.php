@extends('layouts.header')
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Styles -->
    <style>
        :root {
            --bulma-card-width: 380px;
        }

        .card {
            width: var(--bulma-card-width);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s;
            margin: 0 auto;
            /* Centrar la tarjeta horizontalmente */
            box-sizing: border-box;
            /* Asegura que el padding y el border estén incluidos en el tamaño total */
        }

        .cardHover:hover {
            transform: scale(1.05);
        }

        .box-general-index div {
            /* border: solid 3px rgb(250, 20, 212); */

        }

        .presentation-text,
        .developer-text {
            font-size: 3em;
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            border-right: .15em solid orange;
            color: rgb(0, 209, 178);
            animation: caret 1s steps(1) infinite;
        }

        #box-general-card {
            /* border: solid 3px coral; */
            height: 100%;
        }

        @keyframes caret {
            50% {
                border-color: transparent;
            }
        }

        .box-text-index {
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            height: 280px;
        }

        @media (max-width: 768px) {

            .presentation-text,
            .developer-text {
                font-size: 2em;
            }
        }

        @media (max-width: 480px) {

            .presentation-text,
            .developer-text {
                font-size: 1.5em;
            }
        }
    </style>
</head>

<body>
    <div class="s">
        <div class="box-general">
            <div class="box-text-index">
                {{-- <img src="./images/iconos/Home-logo-individual-claro.png" alt=""> --}}
                <section class="section">
                    <div class="container">
                        <h1 id="presentationText" class="presentation-text"></h1>
                        <h2 id="developerText" class="developer-text"></h2>
                    </div>
                </section>
            </div>

            <div class="box-general-index">
                <div>
                    <div id="box-general-card" class="card custom-profile">
                        <div class="card-image">
                            <figure class="image is-4by5">
                                <img src="{{ asset('/images/img-my-profile.jpg') }}" alt="Descripción de la imagen">
                            </figure>
                        </div>
                        <div class="card-content cardHover">
                            <button class="Download-button" onclick="window.location.href='{{ route('download.cv') }}'">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20"
                                    viewBox="0 0 640 512">
                                    <path
                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z"
                                        fill="white"></path>
                                </svg>
                                <span>Download CV</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <div id="box-general-card" class="card cardHover">
                        <a href="{{ route('aboutme') }}" class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="{{ asset('/images/iconos/about-me.png') }}"
                                        alt="Descripción de la imagen">
                                </div>
                                <h2 class="title is-4 card-content">About Me</h2>
                                <p class="content">I am a recent graduate of Computer Systems Engineering with a solid
                                    foundation technique and an innate passion for continuous learning...</p>
                            </div>
                        </a>
                    </div>
                </div>


                <div>
                    <div id="box-general-card" class="card cardHover">
                        <a href="{{ route('projects') }}" class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="{{ asset('/images/iconos/projects.png') }}"
                                        alt="Descripción de la imagen">
                                </div>
                                <h2 class="title is-4 card-content">Projects</h2>
                                <p class="content">Software developer with little professional experience but
                                    independently
                                    I have more than 2 years of experience in the design, development and
                                    implementation...
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div id="box-general-card" class="card cardHover">
                        <a href="{{ route('show.dataWeb') }}" class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="{{ asset('/images/canal-youtube/img-intro-canal.png') }}"
                                        alt="Descripción de la imagen">
                                </div>
                                <h2 class="title is-4 card-content">Website</h2>
                                <p class="content">Laravel News is a community driven portal and newsletter aggregating
                                    all
                                    of the latest and most important news in the Laravel ecosystem...</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="box-footer-index">
                <div class="box-sponsor-footer">
                    <div>
                        Sponsor
                    </div>

                    <div class="box-sponsor-footer">
                        <a href="https://bulma.io/" target="_blank" rel="noopener noreferrer"><img
                                src="{{ asset('/images/iconos/bulma.png') }}" alt=""></a>
                    </div>

                    <div class="box-sponsor-footer">
                        <a href="https://www.flaticon.es/" target="_blank" rel="noopener noreferrer"><img
                                src="{{ asset('/images/iconos/flaticon.png') }}" alt=""></a>
                    </div>

                </div>
                <div class="box-version-footer">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const text1 = "I am Askary Bautista";
            const text2 = "Software Developer";
            const speed = 100;
            const delay = 500;
            const presentationText = document.getElementById('presentationText');
            const developerText = document.getElementById('developerText');

            function typeWriter(text, element, index, callback) {
                if (index < text.length) {
                    element.innerHTML += text.charAt(index);
                    setTimeout(() => typeWriter(text, element, index + 1, callback), speed);
                } else {
                    setTimeout(callback, delay);
                }
            }

            function startAnimation() {
                typeWriter(text1, presentationText, 0, () => {
                    presentationText.style.borderRight = 'none';
                    typeWriter(text2, developerText, 0, () => {
                        developerText.style.borderRight = 'none';
                        setTimeout(() => {
                            presentationText.innerHTML = "";
                            developerText.innerHTML = "";
                            presentationText.style.borderRight = '.15em solid orange';
                            developerText.style.borderRight = '.15em solid orange';
                            startAnimation();
                        }, delay);
                    });
                });
            }

            startAnimation();
        });
    </script>
</body>

</html>
