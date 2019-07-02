<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    @include('includes.header')
    <main role="main">
        @yield('content')

    </main>

</div>
    <footer class="container-fluid bg-dark text-white text-center">
        <div class="container">
            @include('includes.footer')
        </div>
    </footer>
@include('includes.jsfooter')
</body>
</html>
