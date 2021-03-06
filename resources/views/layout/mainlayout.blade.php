<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
</head>

<body>

    @include('layout.partials.nav')

    <main role="main">
        @yield('content')
    </main>

    <footer class="container">
        @include('layout.partials.footer')
    </footer>

    @include('layout.partials.footer-scripts')


</body>

</html>
