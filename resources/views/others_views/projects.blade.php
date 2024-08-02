@extends('layouts.header')
@section('title', 'Projects')

<style>
    #container-custom {
        padding: 2rem;
        background-color: #f9f9f9;
    }

    .section-header {
        margin-bottom: 2rem;

    }

    #projects-container {
        margin-top: 2rem;
        /* border: solid 3px rgb(0, 4, 249); */
    }

    .project-card-website {
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        flex-direction: column;
        height: 100%;
        /* border: solid 3px rgb(0, 4, 249); */
    }

    .project-card-website:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-image {
        flex-grow: 1;
    }




    #container-card-projects {
        /* border: solid 3px rgba(250, 250, 0, 0.603); */
        height: 100%;
        display: grid;
        grid-template-rows: auto 1fr;
    }

    .card-content {
        /* border: solid 3px rgb(82, 1, 1); */
        height: 100%;
    }

    .card-content-wrapper {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        /* border: solid 3px rgb(255, 80, 80); */
    }

    .title-wrapper p {
        color: #3273dc;
        /* border: solid 3px coral; */
    }

    /* .technologies-wrapper {
        border: solid 3px rgb(80, 197, 255);
    } */

    .description-wrapper {
        /* border: solid 3px rgb(255, 80, 243); */
        margin-top: 5px;
    }

    /* .features-wrapper {
        border: solid 3px rgb(127, 80, 255);

    } */

    .technologies-wrapper,
    .features-wrapper {
        margin-top: 0.5rem;
        color: #4a4a4a;

    }

    .button.is-primary {
        background-color: #3273dc;
        border-color: #3273dc;
    }

    .button.is-primary:hover {
        background-color: #275a9e;
        border-color: #275a9e;
    }

    .column {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>


@section('content')

    <body style="background-color: #4a4a4a">
        <div class="container" id="container-custom">
            <div class="section">
                <div class="has-text-centered section-header">
                    <div>
                        <h2 class="title is-3 has-text-primary">Projects</h2>
                    </div>
                    <div>
                        <p class="subtitle is-5 has-text-grey">Explore my personal projects</p>
                    </div>
                </div>

                <div class="columns is-multiline" id="projects-container">
                    @foreach ($projectsPersonal['proyectos_personales'] as $project)
                        <div class="column is-one-quarter" id="box-general-cards-projects">
                            <a href="{{ $project['url'] ?? '#' }}" class="card project-card-website"
                                id="container-card-projects">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="{{ asset($project['imagen']) }}" alt="{{ $project['nombre'] }}">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="title-wrapper">
                                        <p class="title is-5">{{ $project['nombre'] }}</p>
                                    </div>
                                    <div class="description-wrapper">
                                        <p class="subtitle is-6">{{ $project['descripcion'] }}</p>
                                    </div>
                                    <div class="technologies-wrapper">
                                        <p class="subtitle is-7">Technologies: {{ implode(', ', $project['tecnologias']) }}
                                        </p>
                                    </div>
                                    @if (isset($project['funcionalidades']))
                                        <div class="features-wrapper">
                                            <p class="subtitle is-7">Features:
                                                {{ implode(', ', $project['funcionalidades']) }}</p>
                                        </div>
                                    @endif

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

    </body>

@endsection
