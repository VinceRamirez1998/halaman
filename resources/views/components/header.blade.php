<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    
    <!-- Favicon -->
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
</head>