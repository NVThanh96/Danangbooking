<header class="site-header js-site-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4" data-aos="fade" style="
    font-size: 40px;font-family: Brush Script MT,serif; color: #b90b0b"><a
                    href="{{route('index')}}">DaNang Booking</a></div>
            <div class="col-6 col-lg-8">

                <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- END menu-toggle -->

                <div class="site-navbar js-site-navbar"  style="background-image: url({{asset('images/4.jpg')}})">
                    <nav role="navigation">
                        <div class="container">
                            <div class="row full-height align-items-center">
                                <div style="background: rgba(255,255,255,35%)" class="col-md-6 mx-auto">
                                    <ul class="list-unstyled menu" style="color: black" >
                                        <li class="nav-item "><a href="{{route('index')}}">Home</a></li>
                                        <li class="nav-item"><a href="{{route('index.hotels')}}">Hotels</a></li>
                                        <li class="nav-item"><a href="{{route('index.about')}}">About</a></li>
                                        <li class="nav-item"><a href="{{route('index.events')}}">Events</a></li>
                                        <li class="nav-item"><a href="{{route('index.contact')}}">Contact</a></li>
                                        <li class="nav-item"><a href="{{route('index.reservation')}}">Reservation</a></li>
                                        @if (Route::has('login'))
                                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                    @auth
                                                        <li><a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a></li>
                                                    @else
                                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                                                        @if (Route::has('register'))
                                                            <li><a href="{{ route('register') }}"
                                                               class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                                        @endif
                                                    @endauth
                                                </div>
                                            @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

                </div>
            </div>

        </div>

    </div>
</header>

<!-- END head -->
