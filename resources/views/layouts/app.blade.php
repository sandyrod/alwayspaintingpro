<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Always Pro Painting</title>
    <meta name="description" content="En Always Pro Painting, transformamos espacios desde 2022 con servicios profesionales de pintura, reparación de drywall, texturizado y lavado a presión. Servimos con confiabilidad en Sarasota, Bradenton y áreas circundantes, garantizando acabados duraderos, materiales de primera calidad, compromiso ambiental y atención experta.">
    <meta name="keywords" content="pintura, servicios de pintura, reparación de drywall, texturizado, lavado a presión, Always Pro Painting, Sarasota, Bradenton, servicios de pintura en Sarasota, servicios de pintura en Bradenton, acabados duraderos, materiales de calidad, compromiso ambiental, atención experta">

  <!-- Favicons -->
  <link href="{{ asset('storage/img/favicon.png') }}" rel="icon">
  <!-- Preload principal slide image for LCP optimization -->
  <link rel="preload" as="image" href="{{ asset('storage/img/slide/slide-1-def.webp') }}">
  <link href="{{ asset('storage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet"></noscript>
  <style>
    @font-face {
      font-family: 'Font Awesome 6 Free';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
    }
    @font-face {
      font-family: 'Font Awesome 6 Free';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
    }
    @font-face {
      font-family: 'Font Awesome 6 Brands';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
    }
  </style>
  <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.min.css') }}">
  <link href="{{ asset('css/header-hover-effects.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('css/header-hover-effects.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('css/menu-active-color.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('css/menu-active-color.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('css/services-hover.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('css/services-hover.css') }}" rel="stylesheet"></noscript>
  <!-- Vendor CSS Files -->
  <link rel="preload" href="{{ asset('storage/vendor/bootstrap/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link href="{{ asset('storage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('storage/vendor/icofont/icofont.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('storage/vendor/icofont/icofont.min.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('storage/vendor/bboxicons/css/boxicons.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('storage/vendor/bboxicons/css/boxicons.min.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('storage/vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('storage/vendor/animate.css/animate.min.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('storage/vendor/venobox/venobox.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('storage/vendor/venobox/venobox.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('storage/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('storage/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet"></noscript>
  <link href="{{ asset('storage/vendor/aos/aos.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="{{ asset('storage/vendor/aos/aos.css') }}" rel="stylesheet"></noscript>

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

    <style>
        /* Language Selector */
        .language-selector {
            margin-left: 20px;
            position: relative;
        }

        .language-link {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            padding: 8px 15px;
            transition: color 0.3s ease;
        }

        .language-link:hover {
            color: #000;
        }

        .language-selector .dropdown-menu {
            margin-top: 0;
            padding: 8px 0;
            border: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            border-radius: 10px;
        }

        .language-selector .dropdown-item {
            padding: 8px 20px;
            color: #333;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .language-selector .dropdown-item:hover {
            background: #f8f9fa;
            color: #000;
        }

        /* Topbar */
        #topbar {
            background: rgba(255, 255, 255, 0.9);
            padding: 15px 0;
        }
    </style>

    <!-- Incluir footer -->
    @include('layouts.footer')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
     <!-- Scripts comunes -->
    @stack('scripts')
    <!-- Vendor JS Files -->
  <script src="{{ asset('storage/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/menu-active.js') }}"></script>
    <script src="{{ asset('storage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Template Main JS File -->
    @vite(['resources/js/main.js'])
    <!-- Translation JS -->
    <script src="{{ asset('js/translations.js') }}"></script>
    <script>
        // Asegurarse de que translations.js se cargue correctamente
        if (typeof switchLanguage === 'undefined') {
            console.error('translations.js no se ha cargado correctamente');
        } else {
            // Inicializar el dropdown de idiomas
            initializeLanguageDropdown();
            
            // Manejar cambio de idioma
            document.querySelectorAll('.language-selector .dropdown-item').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const lang = this.getAttribute('data-lang');
                    switchLanguage(lang);
                });
            });

            // Actualizar idioma al cargar la página
            updateTranslations();
        }
    </script>
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