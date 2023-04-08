
<header class="header">
    <section class="header-top">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="welcome">
                    Welcome to ToNote Shop, let's subscribe our newsletter to GET special promotion <span>50% OFF</span> all items
                </div>
                <div class="telephone d-none d-lg-block">
                    <i class="fa fa-phone-square"></i> Hotline: <a href="tel:0129%20925%209901">0129 925 9901</a>
                </div>
            </div>
        </div>
    </section>


    <section class="header-center">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="{{ route('homePage') }}"><b>LOGO</b></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item">
                          <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('productListings') }}">PRODUCTS</a>
                        </li>
                    </ul>

                  <ul class="navbar-nav ml-auto">
                    @if (Auth::user())

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">DASHBOARD</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          PROFILE
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                            <form method="POST" id="logoutForm" action="{{ route('logout') }}">
                                @csrf
                            </form>

                          <a onclick="event.preventDefault();
                          document.getElementById('logoutForm').submit();" class="dropdown-item" href="{{ route('logout') }}">Logout</a>

                          <a class="dropdown-item" href="{{ route('orders') }}">Orders</a>
                        </div>
                    </li>

                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                    </li>

                    @endif
                    <li class="nav-item">
                        <a class="nav-link cartIcon" href="{{ route('viewCartList') }}">
                            <span class="cartNum">{{ $totalQuantity }}</span>
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>
    </section>


    <section class="header-bottom">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="mainMenu">
                    <button class="btn btn-primary">All Category</button>
                </div>
                <div class="searchBox">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="smallBanner">
                    <img src="{{ asset('assets/images/banner_05.avif') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</header>
