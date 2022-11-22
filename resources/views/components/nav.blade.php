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
            <a href="{{ route('dashboard') }}" class="nav-item nav-link {{  Route::is('dashboard') ? 'active' : ''  }}">Home</a>
            <a href="{{ route('user.menu') }}" class="nav-item nav-link {{  Route::is('user.menu') ? 'active' : ''  }}">Menu</a>
            <a href="{{ route('user.keranjang') }}" class="nav-item nav-link {{  Route::is('user.keranjang') ? 'active' : ''  }}">Pesanan Kamu</a>
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
