<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset("resto/lib/animate/animate.min.css") }}" rel="stylesheet">
    <link href=" {{ asset("resto/lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">
    <link href=" {{ asset("resto/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css") }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" {{ asset("resto/css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset("resto/css/style.css") }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
           @include("components.nav")

           @yield('headercontent')

        </div>

        <!-- Navbar & Hero End -->


       @yield('content')


        @include('components.footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("resto/lib/wow/wow.min.js") }}"></script>
    <script src=" {{ asset("resto/lib/easing/easing.min.js") }}"></script>
    <script src=" {{ asset("resto/lib/waypoints/waypoints.min.js") }}"></script>
    <script src="{{ asset("resto/lib/counterup/counterup.min.js") }}"></script>
    <script src=" {{ asset("resto/lib/owlcarousel/owl.carousel.min.js") }}"></script>
    <script src=" {{ asset("resto/lib/tempusdominus/js/moment.min.js") }}"></script>
    <script src=" {{ asset("resto/lib/tempusdominus/js/moment-timezone.min.js") }}"></script>
    <script src=" {{ asset("resto/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js") }}"></script>

    <!-- Template Javascript -->
    <script src=" {{ asset("resto/js/main.js") }}"></script>
</body>

</html>
