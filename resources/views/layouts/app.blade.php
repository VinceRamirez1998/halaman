<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link rel="stylesheet" href="{{ asset('libraries/owlcarousel/assets/owl.carousel.min.css') }}">

<!-- Customized Bootstrap Stylesheet -->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

<!-- Template Stylesheet -->
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
@yield('styles') <!-- For additional page-specific styles -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Halaman</title>

    <!-- Fonts -->
    

    <!-- Scripts -->
    
</head>
<body>
    <div id="app">
       
                   

        <main class="py-0">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('libraries/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('libraries/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('libraries/easing/easing.min.js') }}"></script>
    <script src="{{ asset('libraries/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontendJs/main.js') }}"></script>
   
</body>
</html>
