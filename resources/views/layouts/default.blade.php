<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>

<header>
    @include('includes.header')
</header>

@yield('content')

<main role="main">
    @yield('content')
    <footer class="row">
        @include('includes.footer')
    </footer>
</main>

@include('includes.jsfooter')

</body>
</html>