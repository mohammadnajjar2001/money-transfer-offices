<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/home.scss', 'resources/js/home.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    
</head>
<body>
    @php
        $totalUsersCount = \App\Models\User::count();
        $lastLoggedInUser = \App\Models\User::latest('updated_at')->first();
        $secondLastLoggedInUser = \App\Models\User::latest('updated_at')->skip(1)->first();
        $thirdLastLoggedInUser = \App\Models\User::latest('updated_at')->skip(2)->first();
        $Offices = \App\Models\Office::latest()->take(5)->get();
        $totalOfficesCount = $Offices->count();
        $img1 = asset('img/1.png');
        $img2 = asset('img/2.jpg');
        $img3 = asset('img/3.jpg');
        $plus = asset('img/plus.png');
        $profile2 = asset('img/6.jpg');
        $profile3 = asset('img/profile-3.jpg');
        $profile4= asset('img/profile-4.jpg');
    @endphp

    <div class="container">
        <!-- Sidebar Section -->
        <aside style="
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0;
            
          ">
            @if(Auth::check() && auth()->user()->role_id == 'admin')
                <div class="toggle">
                    <div class="logo">
                        <img src={{$img2}}>
                        <h2>{{__('mycostm.FOR')}}<span class="danger">{{__('mycostm.ADMIN')}}</span></h2>
                    </div>
                </div>

                <div class="sidebar"><br>
                    <a href="{{ route('home') }}">
                        <span class="material-icons-sharp">
                            dashboard
                        </span>
                        <h3>{{__('mycostm.home')}}</h3>
                    </a><br>
                    <a href="{{ route('offices.index') }}">
                        <span class="material-icons-sharp">
                            person_outline
                        </span>
                        <h3>{{__('mycostm.Offices browes')}}</h3>
                    </a><br>
                    <a href="{{ route('offices.create') }}">
                        <span class="material-icons-sharp">
                            person_outline
                        </span>
                        <h3>{{__('mycostm.Office create')}}</h3>
                    </a><br>
                    <a href="{{ route('transfers.index') }}">
                        <span class="material-icons-sharp">
                            receipt_long
                        </span>
                        <h3>{{__('mycostm.Transfer browes')}}</h3>
                    </a><br>
                    <a href="{{ route('transfers.create') }}">
                        <span class="material-icons-sharp">
                            receipt_long
                        </span>
                        <h3>{{__('mycostm.Transfer create')}}</h3>
                    </a><br>
                    <a href="{{route('currency.index')}}">
                        <span class="material-icons-sharp">
                            inventory
                        </span>
                        <h3>{{__('mycostm.currency exchange')}}</h3>
                    </a><br>
                    <a href="#">
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>{{__('mycostm.choose Lang:')}}</h3>
                    </a>
                    <a href="{{ route('lang','ar') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.AR')}}</h3>
                    </a>
                    <a href="{{ route('lang','en') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.EN')}}</h3>
                    </a>

                    <a href="{{ route('lang','tr') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.TR')}}</h3>
                    </a>

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="material-icons-sharp">
                                            logout
                                        </span>
                                        {{ __('mycostm.Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div><br>
            @endif

            @if(Auth::check() && auth()->user()->role_id == 'super')
                <div class="toggle">
                    <div class="logo">
                        <img src={{$img2}}>
                        <h2>{{__('mycostm.FOR')}}<span class="danger">{{__('mycostm.super')}}</span></h2>
                    </div>
                </div>
                <div class="sidebar"><br>
                    <a href="#" class="active">
                        <span class="material-icons-sharp">
                            insights
                        </span>
                        <h3>{{__('mycostm.super')}}</h3>
                    </a><br>

                    <a href="{{ route('home') }}">
                        <span class="material-icons-sharp">
                            dashboard
                        </span>
                        <h3>{{__('mycostm.home')}}</h3>
                    </a><br>
                    <a href="{{ route('offices.index') }}">
                        <span class="material-icons-sharp">
                            person_outline
                        </span>
                        <h3>{{__('mycostm.Offices browes')}}</h3>
                    </a><br>
                    <a href="{{ route('transfers.index') }}">
                        <span class="material-icons-sharp">
                            receipt_long
                        </span>
                        <h3>{{__('mycostm.Transfer browes')}}</h3>
                    </a><br>
                    <a href="{{route('currency.index')}}">
                        <span class="material-icons-sharp">
                            inventory
                        </span>
                        <h3>{{__('mycostm.currency exchange')}}</h3>
                    </a><br>
                    <a href="#">
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>{{__('mycostm.choose Lang:')}}</h3>
                    </a>
                    <a href="{{ route('lang','ar') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.AR')}}</h3>
                    </a>
                    <a href="{{ route('lang','en') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.EN')}}</h3>
                    </a>

                    <a href="{{ route('lang','tr') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.TR')}}</h3>
                    </a>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="material-icons-sharp">
                                            logout
                                        </span>
                                        {{ __('mycostm.Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            @endif

            @if(Auth::check() && auth()->user()->role_id == 'user')
                <div class="toggle">
                    <div class="logo">
                        <img src={{$img2}}>
                        <h2>{{__('mycostm.FOR')}}<span class="danger">{{__('mycostm.USER')}}</span></h2>
                    </div>
                </div>
                <div class="sidebar"><br>
                    <a href="#" class="active">
                        <span class="material-icons-sharp">
                            insights
                        </span>
                        <h3>{{__('mycostm.USER')}}</h3>
                    </a><br>
                    <a href="{{ route('transfers.create') }}">
                        <span class="material-icons-sharp">
                            receipt_long
                        </span>
                        <h3>{{__('mycostm.Transfer create')}}</h3>
                    </a><br>
                    <a href="#">
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>{{__('mycostm.choose Lang:')}}</h3>
                    </a>
                    <a href="{{ route('lang','ar') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.AR')}}</h3>
                    </a>
                    <a href="{{ route('lang','en') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.EN')}}</h3>
                    </a>

                    <a href="{{ route('lang','tr') }}">
                        <span class="material-icons-sharp">
                        </span>
                        <h3>{{__('mycostm.TR')}}</h3>
                    </a>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="material-icons-sharp">
                                            logout
                                        </span>
                                        {{ __('mycostm.Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> <br>
                    <a href="{{route('currency.index')}}">
                        <span class="material-icons-sharp">
                            inventory
                        </span>
                        <h3>{{__('mycostm.currency exchange')}}</h3>
                    </a><br>
                </div>
            @endif
        </aside>
        <!-- End of Sidebar Section -->

        <main class="py-4">
            @yield('content')
        </main>
        <aside  style="
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
        
      ">
        @if(Auth::check())
        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>{{__('mycostm.Hey')}}, <b>{{ auth()->user()->name }}</b></p>
                        <p class="text-muted">{{  auth()->user()->role_id }}</p>
                    </div>
                    <div class="profile-photo">
                        <img src={{$profile2}}>
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="{{$img3}}">
                    <h2>ghazi khalil <br>&<br>Muhammad Najjar</h2>
                    <p>{{__('mycostm.Fullstack Web Developer')}}</p>
                </div>
            </div>
            <div class="reminders">
                <div class="header">
                    <h2>{{__('mycostm.call us')}}</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>
                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <a href="{{route('about.index')}}">
                                 <h3>{{__('mycostm.contant for us')}}</h3></a>
                        </div>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>{{__('mycostm.send contant')}}</h3>
                    </div>
                </div>
            </div>

        </div>
        @endif
    </div>
</aside>
</body>
</html>
