<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Always Pro Painting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('storage/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('storage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('storage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/bboxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  @vite(['resources/css/style.css', 'resources/js/main.js'])
  
</head>
<body>
    <!-- Incluir header -->
    @include('layouts.header')

    <!-- Contenido principal -->
    <main class="">
        @yield('content')
    </main>

    <!-- Incluir footer -->
    @include('layouts.footer')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Scripts comunes -->
    @stack('scripts')
    <!-- Vendor JS Files -->
  <script src="{{ asset('storage/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('storage/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('storage/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
</body>
</html>