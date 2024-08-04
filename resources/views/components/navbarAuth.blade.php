<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5" id="navMain">
    <a href="{{ url('/') }}" class="navbar-brand d-flex d-lg-none">
        <h6 class="m-0 display-4 text-secondary fs-1"><span class="text-white">ECOGROW</span>SOLUTIONS</h6>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="col-lg-3">
            <div class="d-flex align-items-center justify-content-start">
                <img src="img/ECOGROWSOLUTIONS.png" class="me-2" style="height: 40px;">
                <a href="{{ url('/') }}" class="navbar-brand ms-lg-1">
                    <h6 class="m-0 display-4 text-white fs-1"><span class="text-secondary">ECOGROW</span>SOLUTIONS</h6>
                </a>
            </div>
        </div>
        <div class="navbar-nav w-50 align-items-center justify-content-center">
            <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
            
            <a href="{{ url('/product') }}" class="nav-item nav-link">Shop</a>
            
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <div class="position-absolute end-0 px-5">
            <div class="navbar-nav mx-auto py-0">
                <i class="bi bi-cart fs-1 py-2 text-white "></i>
                <a href="{{ url('/myCart') }}" class="nav-item nav-link">My Cart</a>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/profile') }}">
                        Profile
                        </a>
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
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
