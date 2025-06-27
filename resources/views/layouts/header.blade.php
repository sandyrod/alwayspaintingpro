<!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block" style="position: absolute; top: 0; left: 0; width: 100%; background-color: rgba(255,255,255,0.9); padding: 8px 0;">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a>
        <i class="icofont-whatsapp"></i> <a href="https://wa.me/17274176867" target="_blank">(727) 417-6867</a> | <a href="https://wa.me/17274176753" target="_blank">(727) 417-6753</a>
      </div>
      <div class="social-links float-right">
        <a target="_blank" href="https://www.facebook.com/alwayspropainting" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/alwayspropainting" class="instagram"><i class="icofont-instagram"></i></a>
        <a target="_blank" href="https://twitter.com/alwayspropaint" class="twitter"><i class="icofont-twitter"></i></i></a>
        <a target="_blank" href="https://www.youtube.com/@ALWAYSPROPAINTING" class="youtube"><i class="icofont-youtube"></i></a>
        <a target="_blank" href="https://bsky.app/profile/alwayspropainting.bsky.social" class="bluesky">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#74C0FC" d="M111.8 62.2C170.2 105.9 233 194.7 256 242.4c23-47.6 85.8-136.4 144.2-180.2c42.1-31.6 110.3-56 110.3 21.8c0 15.5-8.9 130.5-14.1 149.2C478.2 298 412 314.6 353.1 304.5c102.9 17.5 129.1 75.5 72.5 133.5c-107.4 110.2-154.3-27.6-166.3-62.9l0 0c-1.7-4.9-2.6-7.8-3.3-7.8s-1.6 3-3.3 7.8l0 0c-12 35.3-59 173.1-166.3 62.9c-56.5-58-30.4-116 72.5-133.5C100 314.6 33.8 298 15.7 233.1C10.4 214.4 1.5 99.4 1.5 83.9c0-77.8 68.2-53.4 110.3-21.8z"/></svg>
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
        <a href="{{ route('home') }}"><img src="{{ asset('storage/img/logo_web.png') }}" alt="" class="img-fluid"> </a>
      </div>

       <nav class="nav-menu d-none d-lg-block" style="margin-left: auto;">
        <ul>
          <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li class="drop-down"><a href="services">Servicios</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="#contact">Contactanos</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->