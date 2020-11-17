<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
</head>
<body>
    <style>
        .rounded-circle{
            width: 30px;
            height: 30px;
            text-align: center;
            border-radius: 15px;
        }
    </style>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <i class="fas fa-gas-pump"></i> {{ config('app.name', 'EnergieTic') }}
                </a>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="fas fa-users-cog"></i> {{ Auth::user()->name }}
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
                           
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block shadow bg-light sidebar collapse ">
                    <div class="sidebar-sticky pt-3">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span class="btn btn-success text-white">Tableau de Bord</span>
                            
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" href="/">
                                    <span data-feather="home"></span>
                                   <i class="fas fa-home text-success"></i> Accueil <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/relever">
                                    <span data-feather="file"></span>
                                   <i class="fas fa-folder-open text-success"></i> Rélever
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/livraison">
                                    <span data-feather="file"></span>
                                    <i class="fas fa-truck text-success"></i>  Livraison
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/controle">
                                    <span data-feather="file"></span>
                                   <i class="fas fa-eye text-success"></i> Controle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/region">
                                    <span data-feather="file"></span>
                                    <i class="fas fa-globe-africa text-success"></i> Régions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/localite">
                                    <span data-feather="shopping-cart"></span>
                                  <i class="fas fa-map-marked-alt text-success"></i>  Localités
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/site">
                                    <span data-feather="shopping-cart"></span>
                                 <i class="fas fa-broadcast-tower text-success"></i>   Sites
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/typesite">
                                    <span data-feather="shopping-cart"></span>
                                   <i class="fas fa-solar-panel text-success"></i> Types de Site
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/structure">
                                    <span data-feather="shopping-cart"></span> 
                                   <i class="fas fa-cogs text-success"></i> Structure du Site
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/groupe_electrogene">
                                    <span data-feather="shopping-cart"></span>
                                   <i class="fas fa-car-battery text-success"></i> Groupe Electrogene
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/asp">
                                    <span data-feather="shopping-cart"></span>
                                  <i class="fas fa-user-tie text-success"></i>  Asp
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/field">
                                    <span data-feather="shopping-cart"></span>
                                  <i class="fas fa-users-cog text-success"></i>  Field
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            <main class="col-md-10 py-4">
                @include('layouts.flash-messages')
                
                @yield('content')
            </main>
        </div>
          </div>
        </div>
      
</body>
    <script src="{{asset('jquery.min.js')}}"></script>
    {{-- <script src="{{asset('js/popper.min.js')}}"></script> --}}
    {{-- <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>   --}}
    @yield('script')
</html>
