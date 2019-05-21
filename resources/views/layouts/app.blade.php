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

</head>

<body>
    <!-- BEGIN HEADER -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Tickles and Tunes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/music">Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/videos">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/artshow">Art Show</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/marketing">Marketing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/support">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER -->
    <main role="main">

        <section class="content">
            @yield('content')
        </section>

        <!-- BEGIN FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <p><a href="#"><?= setting('title') ?></a> - Copyright <?= date("Y"); ?></p>
                    <ul class="socialBot social">
                        <li><a href="http://facebook.com/<?= setting('facebook') ?>" class="socialIcon facebook"
                                target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://plus.google.com/<?= setting('googleplus') ?>" class="socialIcon"
                                target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://twitter.com/<?= setting('twitter') ?>" class="socialIcon" target="_blank"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a href="/rss" class="socialIcon"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <div class="footer_menu">
                        <?= menu('footer_menu') ?>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <div id="modalpage">
        <div class="modal search_popup" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            style="padding:0;">
            <div class="container">
                <div class="search-modal modal-dialog col-sm-6 col-xs-6" style="float:none;">
                    <div class="modal-content container">

                        <div class="col-sm-8 col-md-offset-2 col-xs-8 col-xs-offset-2 slide">
                            <button type="button" class="close animated rollIn" data-dismiss="modal"
                                aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h1 class="animated fadeInDown">Search with Name</h1>
                            <form method="GET" action="/search" accept-charset="UTF-8"
                                class="form-horizontal formsettings" enctype="multipart/form-data">
                                <input id="search" class="form-control animated fadeIn"
                                    placeholder="Enter name to search" name="search" type="text">
                                <input id="submit" class="btn btn-danger submit-media" type="submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->


    <script src="js/app.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Google Analytics -->

    <?php if(isset($settings->gganalytic) && trim($settings->gganalytic) != ""): ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	    ga('create', '<?= $settings->gganalytic ?>', 'auto');
	    ga('send', 'pageview');
    </script>
    <?php endif; ?>

    <!-- End Google Analytics -->

</body>

</html>
