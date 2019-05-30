@extends('layouts.app')

@section('content')
<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Watch and Play</h1>
            <p class="lead text-muted">Videos to watch and learn how to play together</p>
            <p><a class="btn btn-primary mx-2" href="/videos/fingerplays">Watch</a></p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">Dam
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%"></rect>
                            <text fill="#eceeef" dy=".3em" x="50%" y="50%">Your Art Here</text>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">Fingerplays</h5>
                            <p class="card-text">Watch Kathy Reid-Naiman teach us about fingerplays</p><a
                                class="btn btn-secondary" href="https://youtu.be/xg5Zg2-GOZY" role="button">Watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%"></rect>
                            <text fill="#eceeef" dy=".3em" x="50%" y="50%">Your Art Here</text>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">Mr Bear Says Hello</h5>
                            <p class="card-text">Sing and Learn with Sally Jaegar's action songs for toddlers and
                                infants</p><a class="btn btn-secondary" href="/videos/mrbear" role="button">Watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%"></rect>
                            <text fill="#eceeef" dy=".3em" x="50%" y="50%">Your Art Here</text>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">Things with Strings</h5>
                            <p class="card-text">Learn about instruments with Cathy Fink and Marcy Marxer</p><a
                                class="btn btn-secondary" href="/videos/strings" role="button">Watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
