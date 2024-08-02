@extends('layouts.header')
@section('title', 'Videos')

<style>
    .body-website {
        background-color: #333;
    }

    #container-custom {
        background-color: #f9f9f9;
        font-family: Arial, sans-serif;
        color: #333;
    }

    p {
        text-align: center;
    }

    /* Estilo General */
    .video-card-website {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-decoration: none;
        color: inherit;
        height: 100%;
        /* Añadido para asegurar altura uniforme */
    }

    .video-card-website:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-image img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
        /* Mejora el ajuste de la imagen */
    }

    .card-content {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Espacio entre el título y la descripción */
        height: 150px;
        /* Ajustar según sea necesario */
    }

    .title.is-5 {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 600;
        color: #333;
        text-align: center;
    }

    .video-description-website {
        color: #3273dc;
        margin-top: 0.5rem;
        text-align: center;
        font-size: 1rem;
    }

    /* Clases adicionales para ajustar la separación */
    .card-content-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .title-wrapper {
        flex-shrink: 0;
        /* Asegura que el título no se reduzca */
    }

    .description-wrapper {
        flex-shrink: 0;
        /* Asegura que la descripción no se reduzca */
        margin-top: 0.5rem;
    }

    #no_videos {
        color: #3273dc;
        margin: 0 auto;
    }

    #selectCategory {
        font-weight: bold;
    }


    #card-general-container {
        /* border: solid 3px coral; */
        height: 100%;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .columns.is-multiline .column {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 768px) {
        .columns.is-multiline .column {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

@section('content')

    <body class="body-website">
        <div class="container" id="container-custom">
            <div class="section">
                <div class="has-text-centered">
                    <h2 class="title is-3">Videos</h2>
                </div>

                <div class="tabs is-centered">
                    <ul>
                        @foreach ($categories as $category => $label)
                            <li class="{{ $currentCategory === $category ? 'is-active' : '' }}">
                                <a href="#" data-category="{{ $category }}">{{ $label }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="columns is-multiline" id="videos-container">
                    @foreach ($videos[$currentCategory] as $video)
                        <div class="column is-one-quarter">
                            <a href="{{ $video['link'] ?? '#' }}" class="card video-card-website">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="{{ asset($video['imagen']) }}" alt="{{ $video['nombre'] }}">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="card-content-wrapper">
                                        <div class="title-wrapper">
                                            <p class="title is-5">{{ $video['nombre'] }}</p>
                                        </div>
                                        @if (isset($video['link']))
                                            <div class="description-wrapper">
                                                <p class="subtitle is-6 video-description-website">Watch on YouTube</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>


                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="has-text-centered">
                    <a href="{{ route('welcome') }}" class="button is-primary">Go to Welcome Page</a>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const links = document.querySelectorAll('.tabs a');
                const container = document.getElementById('videos-container');

                function updateVideos(category) {
                    links.forEach(link => {
                        link.closest('li').classList.toggle('is-active', link.getAttribute('data-category') ===
                            category);
                    });

                    fetch(`/website/videos/${category}`)
                        .then(response => response.json())
                        .then(data => {
                            container.innerHTML = data.length ?
                                data.map(video => `
                        <div class="column is-one-quarter" >
                            <a href="${video.link || '#'}" id="card-general-container" class="card video-card-website">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="${video.imagen}" alt="${video.nombre}">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="card-content-wrapper">
                                        <div class="title-wrapper">
                                            <p class="title is-5">${video.nombre}</p>
                                        </div>
                                        ${video.link ? `
                                                                                                                                                                                                                                                                                                            <div class="description-wrapper">
                                                                                                                                                                                                                                                                                                                <p class="subtitle is-6 video-description-website">Watch on YouTube</p>
                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                        ` : ''}
                                    </div>
                                </div>
                            </a>
                        </div>
                    `).join('') :
                                '<p id="no_videos">Welcome to my website.<br>This space will make it easier for you to see the videos I have shared on YouTube<br><span id="selectCategory">Select a category</span></p>';
                        })
                        .catch(error => {
                            console.error('Error fetching videos:', error);
                            container.innerHTML = '<p>Error fetching videos.</p>';
                        });
                }

                links.forEach(link => {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const category = link.getAttribute('data-category');
                        updateVideos(category);
                    });
                });

                // Initialize with the current category
                updateVideos('@json($currentCategory)');
            });
        </script>
    </body>


@endsection
