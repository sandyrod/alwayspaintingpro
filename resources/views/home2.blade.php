@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero" style="margin-top: 60px; padding-top: 0;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active slide-1-bg" role="option" aria-selected="true">
            <!-- Imagen visible para LCP -->
            <picture>
              <source srcset="{{ asset('storage/img/slide/slide-1-def-mobile.webp') }}" media="(max-width: 768px)">
              <img src="{{ asset('storage/img/slide/slide-1-def.webp') }}" alt="Transformamos superficies, inspiramos espacios" style="width:1px;height:1px;position:absolute;left:-9999px;top:auto;" decoding="async" fetchpriority="high" />
            </picture>
            <style>
              @media (max-width: 768px) {
                .slide-1-bg {
                  background-image: url('{{ asset('storage/img/slide/slide-1-def-mobile.webp') }}') !important;
                }
              }
              @media (min-width: 769px) {
                .slide-1-bg {
                  background-image: url('{{ asset('storage/img/slide/slide-1-def.webp') }}') !important;
                }
              }
            </style>
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown" data-key="welcome_title">TRANSFORMAMOS SUPERFICIES, <br>INSPIRAMOS ESPACIOS</h2>
                <p class="animate__animated animate__fadeInUp" data-key="welcome_description">Brindamos servicios profesionales de pintura, reparación de drywall y lavado a presión en Sarasota y Bradenton, garantizando confiabilidad y acabados duraderos con compromiso ambiental.</p>
                <a href="{{ route('transformamos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-key="start_renovation">Atrévete <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item slide-2-bg" role="option" aria-selected="false">
            <style>
              @media (max-width: 768px) {
                .slide-2-bg {
                  background-image: url('{{ asset('storage/img/slide/slide-2-mobile.webp') }}') !important;
                }
              }
              @media (min-width: 769px) {
                .slide-2-bg {
                  background-image: url('{{ asset('storage/img/slide/slide-2.webp') }}') !important;
                }
              }
            </style>
            <picture>
              <source srcset="{{ asset('storage/img/slide/slide-2-mobile.webp') }}" media="(max-width: 768px)">
              <img src="{{ asset('storage/img/slide/slide-2.webp') }}" alt="Slide 2" loading="lazy" style="display:none;" />
            </picture>
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown" data-key="who_we_are">TRANSFORMANDO ESPACIOS<br> CON PROFESIONALISMO</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="{{ route('acreditacion') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-key="more_info">Averigua <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{ asset('storage/img/slide/slide-3-def.webp') }}');" role="option" aria-selected="false">
            <img src="{{ asset('storage/img/slide/slide-3-def.webp') }}" alt="Slide 3" loading="lazy" style="display:none;" />
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown" data-key="transformamos">DE LO COMÚN<br> A LO EXTRAORDINARIO</h2>
                <p class="animate__animated animate__fadeInUp" data-key="professional_description">Transformamos tus espacios con alta calidad
                profesional.</p>
                <a href="{{ route('profesional') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-key="get_started">Sorpréndete <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var isMobile = window.innerWidth <= 768;
    if (isMobile) {
        document.querySelectorAll('.carousel-item').forEach(function(item) {
            var style = item.getAttribute('style');
            if (style && style.includes('slide-')) {
                var newStyle = style.replace(/(slide-[^\/'"]+)(\.webp)/, '$1-mobile$2');
                item.setAttribute('style', newStyle);
            }
        });
        document.querySelectorAll('.carousel-inner img').forEach(function(img) {
            var src = img.getAttribute('src');
            if (src && src.includes('slide-')) {
                img.setAttribute('src', src.replace(/(slide-[^\/'"]+)(\.webp)/, '$1-mobile$2'));
            }
        });
    }
});
</script>
    <script>
        // Wait for jQuery to be loaded
        if (typeof jQuery === 'undefined') {
            document.write('<script src="https://code.jquery.com/jquery-3.6.0.min.js"><\/script>');
        }
    </script>
    <style>
        .about-lists .content-item img {
            transition: transform 0.4s ease-in-out;
            transform-origin: center center;
        }
        
        .about-lists .content-item img:hover {
            transform: scale(1.03);
        }
        
        .video-box {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 20px;
        }
        
        .video-thumbnail-container {
            max-width: 100%;
            height: auto;
        }
        
        
        
        .custom-button .button-text {
            margin-right: 15px;
        }
        
        .custom-button .button-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #fff;
            color: #000;
            font-size: 14px;
        }
        
        .custom-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .features-list {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }
        
        .features-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        
        .features-list li:last-child {
            border-bottom: none;
        }
        
        .features-list i {
            margin-right: 10px;
            font-size: 1.2em;
            color: #4488b3;
        }
        
        
        .video-thumbnail-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }
        
        .video-thumbnail-container img {
            transition: transform 0.3s ease;
        }
        
        .video-thumbnail-container:hover img {
            transform: scale(1.05);
        }
        
        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            opacity: 0.8;
        }
        
        .play-btn:hover {
            opacity: 1;
            background: rgba(0, 0, 0, 0.9);
        }
        
        .play-btn i {
            font-size: 24px;
            color: #fff;
        }
        
        #videoModal {
            text-align: center;
        }
        
        #videoModal .modal-content {
            border-radius: 10px;
            padding: 20px;
        }
        
        #videoModal .modal-body {
            padding: 0;
        }
        
        #videoModal .close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
            font-size: 24px;
        }
        
        #videoModal .close:hover {
            color: #ddd;
        }
        
        #videoModal video {
            border-radius: 10px;
        }
    </style>
    <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <!-- Thumbnail Image -->
            <div class="video-thumbnail-container">
                <a href="{{ route('nosotros') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-key="get_started">
                  <img src="{{ asset('storage/img/about.webp') }}" class="img-fluid" alt="About us">
                </a>
            </div>

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title" style="padding-bottom: 0px;">
              <h2>¿Quienes Somos?</h2>
              <p>En Always Pro Painting, transformamos espacios desde 2022 con servicios profesionales de pintura, 
                reparación de drywall, texturizado y lavado a presión. Servimos con confiabilidad en Sarasota, Bradenton y áreas 
                circundantes, garantizando acabados duraderos, materiales de primera calidad, compromiso ambiental y atención experta.</p>
            </div>

            <div class="icon-box">
              <h4 class="title"></h4>
              <div class="row">
                <div class="col-md-6">
                  <ul class="features-list">
                    <li><i class="fas fa-certificate"></i> Certificados BBB</li>
                    <li><i class="fas fa-check-circle"></i> Calidad garantizada</li>
                    <li><i class="fas fa-users"></i> Equipo profesional</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="features-list">
                    <li><i class="fas fa-clock"></i> +2 años de experiencia</li>
                    <li><i class="fas fa-clock"></i> Puntualidad asegurada</li>
                  </ul>
                </div>
              </div>
              <div class="text-center mt-4">
                <a href="{{ route('nosotros') }}" class="custom-button">
                  <span class="button-text">¡Comienza tu renovación</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>

            

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">
      <div class="section-title">
          <h2>Excelencia</h2>
        </div>
        <div class="row ">

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up">
            <img src="{{ asset('storage/img/acabados.webp') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Acabados duraderos</h4>
            <p class="text-justify">Nuestros servicios ofrecen acabados duraderos y de alta calidad, garantizando espacios impecables por más tiempo
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('storage/img/materiales.webp') }}" alt="Materiales premium" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Materiales premium</h4>
            <p class="text-justify">
              Utilizamos solo materiales premium en cada proyecto para garantizar un resultado final de alta calidad que mejora la apariencia y protege las superficies.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('storage/img/compromiso.webp') }}" alt="Compromiso ambiental" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Compromiso ambiental</h4>
            <p class="text-justify">
              Nuestro compromiso ambiental nos impulsa a utilizar productos ecológicos, asegurando que cada proyecto sea sostenible y seguro para el planeta
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/cuidado.webp') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Cuidado experto</h4>
            <p class="text-justify">
              A diferencia de otras empresas, nuestro equipo de expertos garantiza un cuidado meticuloso en cada proyecto, asegurando la perfeccion en cada detalle.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/cumplimiento.webp') }}" alt="Cumplimiento garantizado" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Cumplimiento garantizado</h4>
            <p class="text-justify">
              Comprometidos contigo, cumplimos plazos, presupuesto y alcance con profesionalismo, sin sorpresas ni retrasos.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/compromisopro.webp') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Compromiso profesional</h4>
            <p class="text-justify">
              Garantizamos resultados confiables con profesionalismo, atención personalizada, entregas puntuales y altos estándares en cada proyecto.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/competitiva.webp') }}" alt="Ventajas competitivas" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Ventajas competitivas</h4>
            <p class="text-justify">
              Transformamos espacios con productos ecológicos y acabados duraderos, garantizando calidad, confianza y compromiso ambiental.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/aval.webp') }}" alt="Avales de calidad" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Avales de calidad</h4>
            <p class="text-justify">
              Tu inversion está protegida con certificaciones oficiales, el respaldo de BBB y cobertura asegurada para tu total confianza.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">+80</span>
              <p>Clientes Felices</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">+400</span>
              <p>Proyectos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-paint-brush" ></i>
              <span data-toggle="counter-up">+1.920</span>
              <p>Horas de Soporte</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" ></i>
              <span data-toggle="counter-up">6</span>
              <p>Trabajadores profesionales</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    <!-- ======= New Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/drywall2.webp') }}'); padding:4px;">
            <div class="content-box">
              <h3>Drywall</h3>
              <p>Acabados de drywall perfectos, duraderos y confiables
              </p>
              <div class="hover-text"><a href="{{ route('drywall') }}">No lo sueñes, ¡vívelo! 
              <br>
              haz clic y obsérvalo</a>
              <br><br><a href="{{ route('drywall') }}" class="custom-button">
                  <span class="button-text">Conquista</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/pinturainteriorexterior.webp') }}');">
            <div class="content-box">
              <h3>Pintura<br>Exterior & Interior</h3>
              <p>Color, precisión y estilo para tu hogar y oficina
              </p>
              <div class="hover-text"><a href="{{ route('pintura') }}">No lo imagines, ¡míralo con un clic!
              </a>
              <br><br><a href="{{ route('pintura') }}" class="custom-button">
                  <span class="button-text">Inspírate</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/lavadoapresion.webp') }}');">
            <div class="content-box">
              <h3>Lavado a presión</h3>
              <p>Limpio y como nuevo, sin químicos agresivos
              </p>
              <div class="hover-text"><a href="{{ route('lavado') }}">Los detalles importan, y nosotros los hacemos destacar: empieza con un clic
              </a>
              <br><br><a href="{{ route('lavado') }}" class="custom-button">
                  <span class="button-text">Sumérgete</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/vinculacion.webp') }}');">
            <div class="content-box">
              <h3>Vinculación<br>Comunitaria</h3>
              <p>Renovamos espacios públicos con criterios ecológicos
              </p>
              <div class="hover-text">
                <a href="{{ route('vinculacion') }}">Haz clic y conoce como sumamos color, vida y sostenibilidad a Sarasota y Bradenton
                </a>
                <br><br><a href="{{ route('vinculacion') }}" class="custom-button">
                  <span class="button-text">Explora</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact d-none">
      <div class="container">

        <div class="section-title">
          <h2>Contactanos</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@alwayspropainting.com<br></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>(727) 417-6867 | (727) 417-6753<br></p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <label for="name" class="sr-only">Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <label for="email" class="sr-only">Correo electrónico</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="subject" class="sr-only">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Mensaje</label>
                <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
@endsection
<link rel="stylesheet" href="{{ asset('css/slider-overlay.css') }}" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="{{ asset('css/slider-overlay.css') }}"></noscript>

<style>
  .icon-box {
    height: 300px; /* Ajusta según necesites */
    background-size: cover;
    background-position: center;
    border-radius: 15px;
    position: relative;
    overflow: hidden;
    margin-bottom: 10px;
    padding: 0;
  }

  .content-box {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    background-color: rgba(255, 255, 255, 0.7);
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    transition: all 0.5s ease;
  }

  .content-box h3 {
    background: linear-gradient(to right, rgb(26 49 98 / 70%), rgb(16 154 192));
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 10px;
  }

  .hover-text {
    color: white;
    font-weight: bold;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: all 0.5s ease;
    width: 100%;
  }

  .icon-box:hover .content-box {
    background: linear-gradient(to right, rgb(22 153 190), rgba(66, 139, 202, 0.7));
    height: 100%;
    width: 100%;
    bottom: 0;
    border-radius: 15px;
  }

  .icon-box:hover .content-box h3,
  .icon-box:hover .content-box p {
    opacity: 0;
  }

  .icon-box:hover .hover-text {
    opacity: 1;
  }

  
</style>
@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de inicio cargada');
    </script>
@endpush