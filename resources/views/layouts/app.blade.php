<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Agri-Higala') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="{{ asset('js/main.js') }}" defer></script>

    <link rel="icon" href="/images/background_circle.png">
</head>
<body>
    <div>
            <nav class="topbar">
                <div class="container-fluid">
                    <div class="row">
                       @include('include.navbar-left')
                       @include('include.navbar-right')
                      
                       
                    </div> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif --}}
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                </li>
                                @include('include.dropdown')
                                @endguest
                            </ul>
                        </div>
                    
                </div>
            </nav>    
        <main class="py-4">
            <div class="container">
             
                @yield('content')
            </div>
            {{-- <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="leftnav-buyer">
                            <div>
                                <a class="" data-toggle="collapse" href="#myaccount-items" aria-expanded="false" aria-controls="product-items">
                                My Account
                                </a>
                            </div>
                            <div class="collapse" id="myaccount-items">
                                <div class="d-flex flex-column myaccount-collapse text-white">
                                    <a href="/buyer/profile">Account</a> 
                                    <a href="/buyer/user/account">Profile</a>
                                </div>
                            </div>
                           
                            <div>
                                <a class="" data-toggle="collapse" href="#myorder-items" aria-expanded="false" aria-controls="product-items">
                                My Orders
                                </a>
                            </div>
                            <div class="collapse" id="myorder-items">
                                <div class="d-flex flex-column text-white">
                                    <a href="/buyer/order">Orders</a> 
                                    <a href="/seller/product/add-new-product">Returns</a>
                                    <a href="/seller/product/add-new-product">Cancellations</a>
                                </div>
                            </div>
                            <a href="#clients">My Reviews</a>
                            <a href="#clients">My Message</a>
                            <a href="#contact">My Notification</a>
                        </div>
                    </div>
                    <div class="col-8">
                        @yield('content')
                    </div>
                </div>
                <div class="row">
                    @include('include.footer')
                </div>
            </div> --}}
        </main>
    </div>

    @include('include.footer')
    <script src="{{asset ('js/main.js')}}"> </script>
</body>
</html>
