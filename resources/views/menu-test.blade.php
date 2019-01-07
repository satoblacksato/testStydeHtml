<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/home">
            <b>{{config('app.name')}}</b>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu" >
        <div class="navbar-start">
            {!! Menu::make($items, 'navbar-item') !!}
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" href="{{route('home')}}">
                        <strong>Inicio</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>