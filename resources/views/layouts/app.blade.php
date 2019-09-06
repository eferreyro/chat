<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
</head>
<body>
    <div id="app">
            <b-navbar toggleable="lg" type="dark" variant="dark">
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
                    <b-navbar-brand href="{{ url('/') }}">
                         {{ config('app.name', 'Laravel') }}
                    </b-navbar-brand>
                
                    <b-collapse id="nav-collapse" is-nav>
                        <b-navbar-nav class="ml-auto">
                            @guest
                                <b-nav-item href="{{ route('login') }}">Login</b-nav-item>
                                <b-nav-item href="{{ route('register') }}">Registrar</b-nav-item>
                            @else
                                    <!-- Navbar dropdowns -->
                                <b-nav-item-dropdown text="Username" right>
                                <b-dropdown-item href="#">Logout</b-dropdown-item>    
                                </b-nav-item-dropdown>
                            @endguest
                    </b-collapse>
            </b-navbar>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
