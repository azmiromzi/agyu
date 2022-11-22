<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="" class="nav-item nav-link active">Home</a>
            {{-- <a href="" class="nav-item nav-link">About</a> --}}
            {{-- <a href="" class="nav-item nav-link">Service</a> --}}
            <a href="{{ route('user.menu') }}" class="nav-item nav-link">Menu</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="" class="dropdown-item">Booking</a>
                    <a href="" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="" class="nav-item nav-link">Contact</a> --}}
            <a href="{{ route('user.keranjang') }}" class="nav-item nav-link">Pesanan Kamu</a>
            {{-- <a href="" class="nav-item nav-link">Pesanan Table</a> --}}
        </div>
       @guest()
        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-2">login</a>
       @endguest
       @auth()
       <form action="{{ route('logout') }}" method="POST" id="logout-form">
        @csrf
         <button type="submit" class="btn btn-primary py-2 px-4 ms-2" href="" >

        Logout
        </button>
    </form>
       @endauth
    </div>
</nav>
