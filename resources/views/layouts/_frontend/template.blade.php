
<!-- =======================================================
* Template Name: Company - v4.1.0
* Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
* Edited: Mohamad Ihsan - KATAPANDA
======================================================== -->
<!DOCTYPE html>
<html lang="in">
<head>
    <!-- ========== OPTIMIZE SEO ========== -->
    <!-- Meta Charset -->
    <meta charset="utf-8">
    <!-- Meta Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- title -->
    <title>
        @yield('title') - Belajar Tahsin Al-Qur'an RTQ Karimah
    </title>
    <!-- Meta Description -->
    @yield('description')
    <!-- Meta Keyword -->
    <meta name="keywords" content="RTQ Karimah, Karimah, Belajar Tahsin, Al-Qur’an, Citayam, Bogor, Tahfidz">
    <!-- Meta Author -->
    <meta name="author" content="Katapanda">
    <!-- Favicons -->
    <link rel="icon" type="image/ico" href="{{ asset('assets/frontend/img/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/frontend/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/frontend/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/frontend/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/frontend/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/frontend/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/frontend/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/frontend/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/frontend/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/frontend/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/frontend/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/frontend/img/favicons/favicon-16x16.png') }}">
    <!-- ========== OPTIMIZE SEO ========== -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" type="text/css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts/_frontend/navbar')

    <!-- ======= Carousel Section ======= -->
    @yield('carousel')

    <main id="main">

        @yield('content')

    </main><!-- End #main -->
    
    <!-- ======= Footer ======= -->
    @include('layouts/_frontend/footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/frontend/vendor/aos/aos.js') }}" type="application/javascript"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="application/javascript"></script>
    <script src="{{ asset('assets/frontend/vendor/glightbox/js/glightbox.min.js') }}" type="application/javascript"></script>
    <script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}" type="application/javascript"></script>
    <script src="{{ asset('assets/frontend/vendor/php-email-form/validate.js') }}" type="application/javascript"></script>
    <script src="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.js') }}" type="application/javascript"></script>
    <script src="{{ asset('assets/frontend/vendor/waypoints/noframework.waypoints.js') }}" type="application/javascript"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/frontend/js/main.js') }}" type="application/javascript"></script>

</body>

</html>