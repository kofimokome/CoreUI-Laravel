<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="./admin">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Agribizcenter">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CoreUI-Laravel</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

@include('common.header')
<div class="sidebar" style="margin-top: 50px">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-puzzle"></i> test</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nav-icon fa fa-plus-circle"> </i> new</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nav-icon icon-puzzle"></i> all</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
<main class="main" style="margin-top: 70px">
    @yield('content')
</main>

@include('common.footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Include the script only on homepage -->
{{--@if(Request::path() === 'admin')--}}
<script src="{{asset('js/main.js')}}"></script>
{{--@endif--}}
</body>
</html>