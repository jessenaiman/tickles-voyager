@extends('layouts.app')

@section('content')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active"
                style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Listen and Learn</h3>
                    <p>This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-image: url('https://source.unsplash.com/O7fzqFEfLlo/1920x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third Slide</h3>
                    <p>This is a description for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<section class="jumbotron">
    <div class="container">
        <h1 class="font-weight-light">Welcome to Tickles and Tunes</h1>
        <p class="lead">Tickles and Tunes should feel like a comfortable gathering space for families and educators.
            We're going to share and
            learn new things together! As little ones discover their fingers and toes, and the world around them, we can
            encourage
            development by singing and celebrating along the way.</p>
        <p class="lead">This will be a safe, nurturing place where we try our best to use positive words. No matter who
            you are or
            where you're
            from, feel free to shake your sillies out for as long as you want!</p>
        <p class="lead">Please find something here to love, and then share something you love back. We're going to plant
            some seeds and watch
            them grow.</p>
    </div>
</section>
<div class="container marketing">
    <h1>Tickles and Tunes</h1>
    <hr />
    <div class="row">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h2>The Art Show</h2>
                    <p>We want to see what makes you smile, sing, and laugh. This site could do with many splashes of
                        colour. Please share your art, and we will put it in our gallery, on instagram (work in
                        progress), and anywhere we can fit on our site.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h2>Support Tickles and Tunes</h2>
                    <p>Please subscribe to our YouTube channel. Follow us on twitter, and facebook. Tell your friends
                        about us, tell everybody</p>
                    <p class="lead">...go tell it on a mountain.</p>
                    <ul class="float-right list-inline"></ul>
                    <li class="list-inline-item">
                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div class="g-ytsubscribe" data-channelid="UC_THbKUe6o-K64vh7gWCPyQ" data-layout="default"
                            data-count="default"></div>
                    </li>
                    <li class="list-inline-item"><a class="twitter-follow-button"
                            href="https://twitter.com/TicklesAndTunes?ref_src=twsrc%5Etfw" data-show-count="false">
                            @TicklesAndTunes
                            <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></a>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container marketing">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center"></div>
    <h1 class="display-4">Introducing some of our newest friends</h1>
    <p class="lead">Every week we try to feature new artists, and teachers. Listen, watch, and follow</p>
    <!-- START THE FEATURETTES-->
    <hr class="featurette-divider" />
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Kathy Reid Naiman.</h2>
            <div class="text-muted">Award winning early childhood educator</div>
            <p class="lead">Famous early childhood educator. Watch and play together with her <a
                    href="/fingerplays">fingerplays</a></p>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalLong">Learn
                more</button>
        </div>
        <div class="col-md-5"><img class="img-fluid" src="../img/Kathy Head shot.jpg" /></div>
    </div>
    <hr class="featurette-divider" />
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Become next month's <span class="text-muted">featured artist</span></h2>
            <p class="lead">Featured artists will be included in the monthly playlist. Additionally they will gain
                followers and subscribers by being amazing, and with some marketing help behind the scenes from tickles
                and tunes.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect fill="#eee" width="100%" height="100%"></rect>
                <text fill="#aaa" dy=".3em" x="50%" y="50%">Your Face Here</text>
            </svg>
        </div>
    </div>
    <hr class="featurette-divider" />
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Become next month's <span class="text-muted">featured artist</span></h2>
            <p class="lead">Featured artists will be included in the monthly playlist. Additionally they will gain
                followers and subscribers by being amazing, and with some marketing help behind the scenes from tickles
                and tunes.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect fill="#eee" width="100%" height="100%"></rect>
                <text fill="#aaa" dy=".3em" x="50%" y="50%">Your Album Here</text>
            </svg>
        </div>
    </div>
    <hr class="featurette-divider" />
    <!-- Modal-->
</div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Kathy Reid-Naiman</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p class="lead">Kathy Reid-Naiman makes children’s music so accessible that some adults secretly confess
                    to listening to it just for themselves.</p>
                <p>Her songs bring the comfort of tradition and the sweetness of nostalgia – as well as the thrill of
                    novelty and innovation to young listeners, and their caregivers too. For 20 years, Kathy has made
                    high quality recordings for children with the diligence and professionalism you would expect from an
                    adult recording. She believes that a great recording should transition smoothly between songs, and
                    the musical arrangements should be varied. This simple, but disciplined approach is the reason why
                    she has long been recognised as one of Canada’s leading early childhood recording artists.</p>
                <p>In her hometown of Trenton, Ontario, Kathy grew up singing in harmony with her two sisters, in the
                    shadow of their jazz guitar playing dad. Kathy began playing music for children in 1980 when her
                    children were young, and over the years, she has developed an enriching music program that she
                    continues to teach in libraries and schools throughout Ontario.</p>
                <p>On her self-run record label, Merriweather Records Ltd., Kathy has recorded 15 CDs and one DVD for
                    children. Her contribution to early literacy has been recognised across Canada through her inclusion
                    in Newborn Literacy Kits in through the Ontario Early Years, BC Books for Babies, and Edmonton
                    Public Libraries. Music continues to be the focus of her life and she delights in introducing
                    children to the wonders of language and music</p>
            </div>
            <div class="modal-footer">
                <ul class="float-right list-inline">
                    <li class="list-inline-item">
                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div class="g-ytsubscribe" data-channelid="UCeEBafvohiu3_gUHsYY-jwQ" data-layout="default"
                            data-count="default"></div>
                    </li>
                    <li class="list-inline-item"><a class="twitter-follow-button"
                            href="https://twitter.com/kathyreidnaiman?ref_src=twsrc%5Etfw" data-show-count="false">
                            @KathyReidNaiman
                            <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
