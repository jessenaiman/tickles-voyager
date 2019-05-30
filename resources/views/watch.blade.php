@extends('layouts.app')

@section('head-scripts')
<script type="text/css">
    .videoContainer {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    iframe {
        /* optional */
        width: 100%;
        height: 100%;
    }
</script>
@endsection

@section('content')
<div class="videoContainer">
    <iframe class="videoContainer__video" width="560" height="315" src="https://www.youtube.com/embed/xg5Zg2-GOZY"
        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
</div>
@endsection
