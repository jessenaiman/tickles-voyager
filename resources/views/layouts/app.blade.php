<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@if(isset($seo->title)){{ $seo->title }}@else{{ setting('title') . ' - ' . setting('description') }}@endif
    </title>

    <!-- only set meta description and keywords if exists -->
    @if(isset($seo->meta_description))
    <meta name="description" content="{{ $seo->meta_description }}">
    @endif

    @if(isset($seo->meta_keywords))
    <meta name="keywords" content="{{ $seo->meta_keywords }}">
    @endif

    @if(isset($seo->twitter_description))
    <meta name="twitter:description" content="{{ $seo->twitter_description }}">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ '@' . setting('twitter_username') }}" />
    @endif

    @if(isset($seo->og_title) && isset($seo->og_image))

    <meta property="og:title" content="{{ $seo->og_title }}" />
    <meta property="og:url" content="{{ rtrim(Request::url(), '/') }}" />
    <meta property="og:image" content="{{ $seo->og_image }}" />
    <meta property="og:type" content="article" />

    @if(isset($seo->og_image_width))
    <meta property="og:image:width" content="{{ $seo->og_image_width }}" />
    @endif

    @if(isset($seo->og_image_height))
    <meta property="og:image:height" content="{{ $seo->og_image_height }}" />
    @endif

    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ Voyager::image(setting('favicon')) }}" type="image/x-icon">

    <!-- Canonical URL -->
    @if(isset($seo->canonical_url))
    <link rel="canonical" href="{{ $seo->canonical_url }}" />
    @else
    <link rel="canonical" href="{{ rtrim(Request::url(), '/') }}" />
    @endif

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    @yield('head-scripts')
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary"><a class="navbar-brand" href="/"><i
                    class="fas fa-music"></i> Tickles and Tunes<i class="fas fa-music"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/music"><i class="fas fa-guitar"></i> Music</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" href="/videos">Videos</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/signup">Create Account</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="content">
        @yield('content')
    </section>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Tickles and Tunes 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
