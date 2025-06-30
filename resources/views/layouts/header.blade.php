<!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block" style="position: absolute; top: 0; left: 0; width: 100%; background-color: rgba(255,255,255,0.9); padding: 8px 0;">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a>
        <i class="icofont-whatsapp icon-whatsapp"></i> <a class="a-whastapp" href="https://wa.me/17274176867" target="_blank">(727) 417-6867</a> | <a class="a-whastapp" href="https://wa.me/17274176753" target="_blank">(727) 417-6753</a>
      </div>
      <div class="social-links float-right">
        <a target="_blank" href="https://www.facebook.com/alwayspropainting" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/alwayspropainting" class="instagram"><i class="icofont-instagram"></i></a>
        <a target="_blank" href="https://twitter.com/alwayspropaint" class="twitter"><i class="icofont-twitter"></i></i></a>
        <a target="_blank" href="https://www.youtube.com/@ALWAYSPROPAINTING" class="youtube"><i class="icofont-youtube"></i></a>
</a>
        <a target="_blank" href="https://www.tiktok.com/@alwayspropainting" class="tiktok">
          <i class="fab fa-tiktok"></i>
        </a>
        <a target="_blank" href="https://www.threads.com/@alwayspropainting" class="threads">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
    <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 0 14.15 0 8.351 0 2.15 4.297 0 8.083 0c2.583 0 4.525.834 5.642 2.623l-1.235 1.542c-.928-1.306-2.345-1.954-4.407-1.954-2.902 0-4.51 1.649-4.51 5.05 0 3.096 1.433 4.763 4.648 4.763 1.835 0 3.555-.873 4.055-2.378l.217.908c-.4 1.373-1.217 2.09-4.077 2.09-3.133 0-5.811-1.741-5.811-5.75 0-4.137 2.408-6.247 6.505-6.247 1.364 0 2.419.21 3.177.645.453.258.715.577.715.98 0 .361-.148.703-.446.938z"/>
  </svg>
</a>
        <a target="_blank" href="https://www.bbb.org/us/fl/sarasota/profile/residential-
painter/always-pro-painting-llc-0653-90440065" class="bbb"><i class="icofont-bbb"></i></a>
      </div>
    </div>
  </section>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center justify-content-between" style="top: 50px; padding: 0 15px;">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const topbar = document.getElementById('topbar');
            const header = document.getElementById('header');
            
            // Show topbar when at top, hide when scrolling
            window.addEventListener('scroll', function() {
                if (window.scrollY === 0) {
                    topbar.style.display = 'block';
                    header.style.top = '50px';
                } else {
                    topbar.style.display = 'none';
                    header.style.top = '0';
                }
            });
        });
    </script>
    <div class="container d-flex align-items-center position-relative" style="min-height: 80px; justify-content: space-between; padding: 10px 0;">
       

       <div class="logo">
        <h1 class="text-light d-none"><a href="{{ route('home') }}"><span>Always Pro Painting</span></a></h1>
        <a href="{{ route('home') }}">
          <img src="{{ asset('storage/img/logo_web.png') }}" alt="" class="img-fluid" style="max-height:100px;">
        </a>
      </div>

        <nav class="nav-menu d-none d-lg-block" style="margin-left: auto;">
        <ul>
          <li class="active"><a href="{{url('/')}}" class="home-link" data-key="home">Inicio</a></li>
          <li><a href="{{url('/#about')}}" class="about-link" data-key="about">¿Quienes Somos?</a></li>
          <li><a href="{{url('/#services')}}" class="service-link" data-key="services">Servicios</a></li>
          <li><a href="{{url('/#portfolio')}}" class="portfolio-link" data-key="portfolio">Portafolio</a></li>
          <li><a href="{{url('/#contact')}}" class="contact-link" data-key="contact">Contacto</a></li>
          <li class="language-selector dropdown">
            <a href="#" class="language-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-globe"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#" data-lang="en">English</a></li>
              <li><a class="dropdown-item" href="#" data-lang="es">Español</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->