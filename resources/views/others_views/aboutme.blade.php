@extends('layouts.header')
@section('title', 'About Me')
<style>
    /* Estilos generales */
    .body-aboutme {
        background-color: #f9f9f9;
        font-family: Arial, sans-serif;
        color: #333;
    }

    /* Contenedor principal */
    .box-card-aboutme {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Encabezado del perfil */
    .profile_header-aboutme {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .profile_highlight-aboutme {
        display: flex;
        align-items: center;
        background-color: #e0f7fa;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        color: #00796b;
        font-weight: bold;
    }

    /* Contenedor del encabezado del perfil */
    .profile_header-aboutme {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Centra horizontalmente */
        justify-content: center;
        /* Centra verticalmente si hay espacio extra */
        text-align: center;
        /* Centra el texto en el contenedor */
        margin-bottom: 2rem;
    }

    /* Contenedor de la imagen del perfil */
    .profile_avatar-aboutme {
        margin-bottom: 1rem;
        /* Espacio debajo de la imagen */
    }

    /* Imagen del perfil */
    .profile_avatar-aboutme img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 5px solid #00796b;
        object-fit: cover;
    }

    /* Nombre del perfil */
    .profile_name-aboutme h2 {
        margin: 0;
        font-size: 2rem;
        color: #00796b;
    }

    .profile_name-aboutme p {
        margin: 0;
        font-size: 1.1rem;
        color: #555;
    }

    /* Nombre del perfil */
    .profile_name-aboutme {
        text-align: center;
    }

    .profile_name-aboutme h2 {
        margin: 0;
        font-size: 2rem;
        color: #00796b;
    }

    .profile_name-aboutme p {
        margin: 0;
        font-size: 1.1rem;
        color: #555;
    }

    /* Enlaces sociales */
    .social-links-aboutme {
        list-style: none;
        padding: 0;
        margin: 1rem 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .social-links-aboutme li {
        margin: 0.5rem;
    }

    .social-links-aboutme a {
        text-decoration: none;
        color: #00796b;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
    }

    .social-links-aboutme svg {
        margin-right: 0.5rem;
    }

    /* Contenido de las pestañas */
    .tabs-aboutme {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        border-bottom: 2px solid #00796b;
    }

    .tabs-aboutme li {
        margin-right: 1rem;
    }

    .tabs-aboutme a {
        text-decoration: none;
        color: #00796b;
        padding: 0.75rem 1.5rem;
        display: block;
        border: 1px solid transparent;
        border-radius: 0.5rem;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }

    .tabs-aboutme a:hover,
    .active-aboutme a {
        background-color: #e0f2f1;
        border-color: #00796b;
    }

    .active-aboutme a {
        background-color: #fff;
        border-bottom: 1px solid #fff;
    }

    /* Contenido de las pestañas */
    .tab-content {
        padding: 1.5rem;
        border-radius: 0.5rem;
        background-color: #ffffff;
        color: #333;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .aboutme-text {
        max-width: 900px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #e0f7fa;
        color: #00796b;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        line-height: 1.8;
        font-size: 1.1rem;
        text-align: justify;
    }

    .aboutme-text-inner {
        border-left: 5px solid #00796b;
        padding-left: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .aboutme-text p {
        margin-bottom: 1.5rem;
    }

    /* Lista de habilidades */
    .skills-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 1rem;
        max-width: 1000px;
        margin: 0 auto;
    }

    .skills-list li {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
        transition: background 0.3s, box-shadow 0.3s;
        padding: 0.5rem;
        background: #f1f8e9;
        border: 1px solid #c8e6c9;
    }

    .skills-list li:hover {
        background: #c8e6c9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .skill-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .skill-icon img {
        width: 40px;
        height: 40px;
        border-radius: 0.5rem;
    }

    .skill-name {
        font-size: 0.875rem;
        color: #00796b;
        margin-top: 0.5rem;
        text-align: center;
        max-width: 80px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* Botón CTA */
    .cta-aboutme {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-size: 1.1rem;
        color: #fff;
        background-color: #00796b;
        border-radius: 0.5rem;
        text-decoration: none;
        text-align: center;
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .cta-aboutme:hover {
        background-color: #065b51;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Lista de experiencia profesional con scroll */
    #tab3-content-aboutme {
        max-height: 400px;
        overflow-y: auto;
    }

    .experience-list-aboutme {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .experience-item-aboutme {
        background-color: #e0f7fa;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 1rem;
    }

    .experience-item-aboutme:hover {
        background-color: #b0e8f1;
    }

    .experience-item-aboutme p {
        margin: 0.5rem 0;
    }

    .date_lab_aboutme {
        font-weight: bold;
        color: #00796b;
    }

    .inst_lab_aboutme {
        font-size: 1.1rem;
        color: #333;
    }

    .post_lab_aboutme {
        font-size: 1rem;
        color: #555;
        font-style: italic;
    }

    .desc_lab_aboutme {
        font-size: 0.9rem;
        color: #666;
        text-align: center;
    }

    .section-title-aboutme {
        font-size: 1.5rem;
        color: #00796b;
        margin-bottom: 1rem;
        text-align: center;
    }

    /* Media queries */
    @media (max-width: 768px) {
        .profile_header-aboutme {
            flex-direction: column;
            align-items: center;
        }

        .profile_avatar-aboutme img {
            width: 100px;
            height: 100px;
        }

        .tabs-aboutme {
            flex-direction: column;
            align-items: stretch;
        }

        .tabs-aboutme li {
            margin-right: 0;
            margin-bottom: 0.5rem;
        }

        .aboutme-text {
            padding: 1rem;
        }

        .skills-list {
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
        }
    }

    @media (max-width: 480px) {
        .profile_name-aboutme h2 {
            font-size: 1.5rem;
        }

        .profile_name-aboutme p {
            font-size: 1rem;
        }

        .cta-aboutme {
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }

        .aboutme-text {
            font-size: 1rem;
        }

        .skill-name {
            max-width: 60px;
        }

        .skills-list li {
            padding: 0.25rem;
        }
    }
</style>


@section('content')

    <body class="body-aboutme">
        <div class="box-card-aboutme">
            <div class="profile-aboutme">
                <header class="profile_header-aboutme">
                    <div class="profile_highlight_wrapper-aboutme">
                        <div class="profile_highlight-aboutme">Currently Improving Skill <img
                                src="{{ asset('/images/iconos/java32.png') }}" alt="Icon"></div>
                    </div>
                    <div class="profile_avatar-aboutme">
                        <img src="{{ asset('/images/img-my-profile-radio.jpg') }}" alt="Profile Avatar">
                    </div>
                </header>

                <div class="profile_name-aboutme">
                    <h2>Askary Bautista</h2>
                    <p>Frontend/FullStack Developer</p>
                </div>
                <ul class="social-links-aboutme">
                    <li>
                        <a href="https://github.com/Askary-Bautista" target="_blank" rel="noopener noreferrer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 2C6.48 2 2 6.48 2 12C2 16.42 4.87 20.17 8.84 21.5C9.34 21.59 9.5 21.27 9.5 21.01C9.5 20.78 9.49 20.19 9.49 19.46C6.73 20.09 6.14 18.28 6.14 18.28C5.68 17.2 5.03 16.92 5.03 16.92C4.11 16.31 5.1 16.33 5.1 16.33C6.12 16.41 6.64 17.36 6.64 17.36C7.52 18.82 8.97 18.41 9.5 18.17C9.57 17.52 9.82 17.09 10.11 16.83C7.89 16.58 5.59 15.64 5.59 11.44C5.59 10.11 6.04 9.04 6.79 8.23C6.67 7.96 6.31 6.73 6.91 5.17C6.91 5.17 7.79 4.89 9.5 6.2C10.26 5.98 11.09 5.87 11.91 5.87C12.73 5.87 13.56 5.98 14.32 6.2C16.03 4.89 16.91 5.17 16.91 5.17C17.51 6.73 17.15 7.96 17.03 8.23C17.78 9.04 18.23 10.11 18.23 11.44C18.23 15.65 15.93 16.58 13.7 16.82C14.07 17.13 14.44 17.75 14.44 18.7C14.44 20.07 14.43 20.9 14.43 21.01C14.43 21.28 14.59 21.61 15.09 21.5C19.06 20.17 22 16.42 22 12C22 6.48 17.52 2 12 2Z"
                                    fill="currentColor" />
                            </svg>
                            GitHub
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/askary-bautista-b9552a2a8" target="_blank"
                            rel="noopener noreferrer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 0H5C2.24 0 0 2.24 0 5V19C0 21.76 2.24 24 5 24H19C21.76 24 24 21.76 24 19V5C24 2.24 21.76 0 19 0ZM7.8 20H4.56V9H7.8V20ZM6.18 7.5C5.01 7.5 4.06 6.55 4.06 5.38C4.06 4.21 5.01 3.26 6.18 3.26C7.35 3.26 8.3 4.21 8.3 5.38C8.3 6.55 7.35 7.5 6.18 7.5ZM20 20H16.77V14.26C16.77 13.15 16.74 11.68 15.32 11.68C13.88 11.68 13.67 12.93 13.67 14.19V20H10.43V9H13.53V10.24H13.57C13.95 9.5 14.98 8.68 16.43 8.68C19.44 8.68 20 10.71 20 13.28V20Z"
                                    fill="currentColor" />
                            </svg>
                            LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@YerksaCodeYT" target="_blank" rel="noopener noreferrer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.4985 6.17759C23.298 5.4567 22.7417 4.90035 22.0208 4.69991C20.1505 4.20068 12.0004 4.20068 12.0004 4.20068C12.0004 4.20068 3.85036 4.20068 1.98008 4.69991C1.25919 4.90035 0.702845 5.4567 0.502406 6.17759C0.00318323 8.04788 0.00318323 12.002 0.00318323 12.002C0.00318323 12.002 0.00318323 15.9561 0.502406 17.8264C0.702845 18.5473 1.25919 19.1036 1.98008 19.304C3.85036 19.8032 12.0004 19.8032 12.0004 19.8032C12.0004 19.8032 20.1505 19.8032 22.0208 19.304C22.7417 19.1036 23.298 18.5473 23.4985 17.8264C23.9977 15.9561 23.9977 12.002 23.9977 12.002C23.9977 12.002 23.9977 8.04788 23.4985 6.17759ZM9.6031 15.1027V8.90125L15.8081 12.002L9.6031 15.1027Z"
                                    fill="currentColor" />
                            </svg>
                            YouTube
                        </a>
                    </li>
                </ul>
                <main>
                    <div class="tabs-wrapper-aboutme">
                        <ul class="tabs-aboutme">
                            <li class="active-aboutme"><a href="#tab1-content-aboutme" id="tab1">About Me</a></li>
                            <li><a href="#tab2-content-aboutme" id="tab2">Skills</a></li>
                            <li><a href="#tab3-content-aboutme" id="tab3">Experience</a></li>
                        </ul>
                    </div>
                    <div id="tab1-content-aboutme" class="tab-content tab-content-aboutme--active">
                        <div class="aboutme-text">
                            <div class="aboutme-text-inner">
                                <p>
                                    I am a recent graduate of Computer Systems Engineering with a solid foundation
                                    technique and an innate passion for continuous learning. Committed to face
                                    challenges and gain experience in new professional stages. Motivated to contribute
                                    to development and innovation in the field of technology.
                                </p>

                                <p>
                                    With a great passion for being able to help others in whatever way we can, also with
                                    great
                                    aspirations without fear of failure, on the contrary, those parts serve as experience
                                    and I acquire new
                                    knowledge thanks to those mistakes or failures.
                                </p>

                                <p>Software developer with little professional experience but independently I have
                                    more than 2 years of experience in the design, development and implementation of web
                                    applications and mobiles. Trained in programming languages such as Java, Python and
                                    JavaScript, and with growth in
                                    understanding of modern frameworks and tools such as Spring, Laravel and React. Noted
                                    for his ability to solve complex problems, his adaptability,
                                    perseverance and its focus on developing efficient and scalable software.
                                </p>
                            </div>
                        </div>

                    </div>


                    <div id="tab2-content-aboutme" class="tab-content">
                        <h3 class="section-title">Programming Skills</h3>
                        <br>
                        <ul class="skills-list">
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/js.png') }}" alt="JavaScript">
                                    <span class="skill-name">JavaScript</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/java32.png') }}" alt="Java">
                                    <span class="skill-name">Java</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/html-5.png') }}" alt="HTML">
                                    <span class="skill-name">HTML</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/css-3.png') }}" alt="CSS">
                                    <span class="skill-name">CSS</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/react.png') }}" alt="React">
                                    <span class="skill-name">React</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/sql.png') }}" alt="SQL">
                                    <span class="skill-name">SQL</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/python.jpeg') }}" alt="Python">
                                    <span class="skill-name">Python</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/c.png') }}" alt="C">
                                    <span class="skill-name">C++</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/csharp.png') }}" alt="C#">
                                    <span class="skill-name">C#</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/git.png') }}" alt="Git">
                                    <span class="skill-name">Git</span>
                                </div>
                            </li>
                        </ul>
                        <br>
                        <h3 class="section-title">Software/Frameworks Skills</h3>
                        <br>
                        <ul class="skills-list">
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/django.png') }}" alt="Django">
                                    <span class="skill-name">Django</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/laravel.png') }}" alt="Laravel">
                                    <span class="skill-name">Laravel</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/springboot.png') }}" alt="Spring Boot">
                                    <span class="skill-name">Spring Boot</span>
                                </div>
                            </li>
                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/unity-masterbrand-black.png') }}" alt="Unity">
                                    <span class="skill-name">Unity</span>
                                </div>
                            </li>

                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/bulma-ico.png') }}" alt="Unity">
                                    <span class="skill-name">Bulma</span>
                                </div>
                            </li>

                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/boostrap.png') }}" alt="Unity">
                                    <span class="skill-name">Boostrap</span>
                                </div>
                            </li>

                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/filmora.png') }}" alt="Unity">
                                    <span class="skill-name">Filmora</span>
                                </div>
                            </li>

                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/corelDrawn.png') }}" alt="Unity">
                                    <span class="skill-name">Corel Drawn</span>
                                </div>
                            </li>

                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/OBS.png') }}" alt="Unity">
                                    <span class="skill-name">OBS</span>
                                </div>
                            </li>

                            <li>
                                <div class="skill-icon">
                                    <img src="{{ asset('/images/iconos/ensambler.png') }}" alt="Unity">
                                    <span class="skill-name">Ensambler</span>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div id="tab3-content-aboutme" class="tab-content">
                        <h3 class="section-title-aboutme">Professional Experience</h3>
                        <ul class="experience-list-aboutme">
                            <li class="experience-item-aboutme">
                                <p class="date_lab_aboutme">April 2024 - April 2024</p>
                                <p class="inst_lab_aboutme">Instituto de Bachillerato de Guerrero</p>
                                <p class="post_lab_aboutme">Data Analyzer / Data Entry Clerk</p>
                                <p class="desc_lab_aboutme">
                                    Analyze data and confirm log matches. My role was to confirm data matches from a
                                    physical log to a digital log.
                                </p>
                            </li>

                            <li class="experience-item-aboutme">
                                <p class="date_lab_aboutme">Jan 2020 - Present</p>
                                <p class="inst_lab_aboutme">Company XYZ</p>
                                <p class="post_lab_aboutme">Software Developer</p>
                                <p class="desc_lab_aboutme">Developing and maintaining web applications using Java and
                                    Laravel. Collaborating with cross-functional teams to define, design, and ship new
                                    features.</p>
                            </li>
                            <li class="experience-item-aboutme">
                                <p class="date_lab_aboutme">Mar 2018 - Dec 2019</p>
                                <p class="inst_lab_aboutme">Company ABC</p>
                                <p class="post_lab_aboutme">Junior Developer</p>
                                <p class="desc_lab_aboutme">Assisted in the development of web applications, performed code
                                    reviews, and implemented new features and bug fixes.</p>
                            </li>
                            <li class="experience-item-aboutme">
                                <p class="date_lab_aboutme">Jan 2020 - Present</p>
                                <p class="inst_lab_aboutme">Company XYZ</p>
                                <p class="post_lab_aboutme">Software Developer</p>
                                <p class="desc_lab_aboutme">Developing and maintaining web applications using Java and
                                    Laravel. Collaborating with cross-functional teams to define, design, and ship new
                                    features.</p>
                            </li>
                            <li class="experience-item-aboutme">
                                <p class="date_lab_aboutme">Mar 2018 - Dec 2019</p>
                                <p class="inst_lab_aboutme">Company ABC</p>
                                <p class="post_lab_aboutme">Junior Developer</p>
                                <p class="desc_lab_aboutme">Assisted in the development of web applications, performed code
                                    reviews, and implemented new features and bug fixes.</p>
                            </li>
                            <li class="experience-item-aboutme">
                                <p class="date_lab_aboutme">Jan 2020 - Present</p>
                                <p class="inst_lab_aboutme">Company XYZ</p>
                                <p class="post_lab_aboutme">Software Developer</p>
                                <p class="desc_lab_aboutme">Developing and maintaining web applications using Java and
                                    Laravel. Collaborating with cross-functional teams to define, design, and ship new
                                    features.</p>
                            </li>
                            <li class="experience-item-aboutme">
                                <p class="date_lab_aboutme">Mar 2018 - Dec 2019</p>
                                <p class="inst_lab_aboutme">Company ABC</p>
                                <p class="post_lab_aboutme">Junior Developer</p>
                                <p class="desc_lab_aboutme">Assisted in the development of web applications, performed code
                                    reviews, and implemented new features and bug fixes.</p>
                            </li>
                        </ul>
                    </div>
                </main>
                <br>
                <a href="{{ route('welcome') }}" class="cta-aboutme">Go to Welcome Page</a>
            </div>
        </div>

        <script>
            // JavaScript for toggling tab content
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.tabs-aboutme a');
                const contents = document.querySelectorAll('.tab-content');

                tabs.forEach(tab => {
                    tab.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(tab.getAttribute('href'));

                        tabs.forEach(t => t.parentNode.classList.remove('active-aboutme'));
                        contents.forEach(c => c.classList.remove('tab-content-aboutme--active'));

                        tab.parentNode.classList.add('active-aboutme');
                        target.classList.add('tab-content-aboutme--active');
                    });
                });
            });
        </script>
    </body>
@endsection
