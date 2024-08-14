@extends('layouts.master')
@section('title', 'Tableau de bord Client')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}

    <div class="page-wrapper">

        <!-- main contents -->
        <main>
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Bienvenu {{ Auth::user()->first_name }}!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.artisan_dashboard') }}">Tableau de
                                        bord</a></li>
                                <li class="breadcrumb-item active">Client</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light"></b></h1>
                        <p class="lead text-muted">Retrouver les meillieurs articles poster par <b> des artisans qualifiers</p>
                        <p>
                            <a href="#" class="btn btn-primary my-2">Appel à l'action principal</a>
                            <a href="#" class="btn btn-secondary my-2">Action secondaire</a>
                        </p>
                    </div>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Image</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Apperçu !</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Ceci est une carte plus large avec un texte de soutien ci-dessous
                                        comme une introduction naturelle à un contenu supplémentaire. Ce contenu est un peu
                                        plus long.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-warning">Voir</button>
                                            {{-- <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Modifier</button> --}}
                                        </div>
                                        {{-- <small class="text-muted">9 min</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Album END -->
            </div>

        </main>

    </div>



@endsection

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
