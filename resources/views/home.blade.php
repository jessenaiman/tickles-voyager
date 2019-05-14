<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <br><br>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3">
                <a href="/post/{{ $post->slug }}">
                    <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                    <span>{{ $post->title }}</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>
