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
          <div class="carousel-item active" style="background-image: url('{{ asset('storage/img/slide/slide-1-def.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown" data-key="welcome_title">TRANSFORMAMOS SUPERFICIES, <br>INSPIRAMOS ESPACIOS</h2>
                <p class="animate__animated animate__fadeInUp" data-key="welcome_description">Brindamos servicios profesionales de pintura, reparación de drywall y lavado a presión en Sarasota y Bradenton, garantizando confiabilidad y acabados duraderos con compromiso ambiental.</p>
                <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-key="start_renovation">Atrévete <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{ asset('storage/img/slide/slide-2.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown" data-key="who_we_are">TRANSFORMANDO ESPACIOS<br> CON PROFESIONALISMO</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-key="more_info">Averigua <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{ asset('storage/img/slide/slide-3-def.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown" data-key="transformamos">DE LO COMÚN<br> A LO EXTRAORDINARIO</h2>
                <p class="animate__animated animate__fadeInUp" data-key="professional_description">Transformamos tus espacios con alta calidad
                profesional.</p>
                <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-key="get_started">Sorprendente <i class="fa fa-arrow-right"></i></a>
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
        
        .custom-button {
            display: inline-flex;
            align-items: center;
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
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
            color: #0d6efd;
        }
        
        .features-list li {
            padding: 10px 0;
        }
            list-style: none;
            padding: 0;
            margin: 20px 0;
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
            color: #0d6efd;
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
                <img src="{{ asset('storage/img/about.jpeg') }}" class="img-fluid video-thumbnail" alt="">
                <a href="#" class="play-btn mb-4" data-video="{{ asset('storage/videos/about.mp4') }}" data-toggle="modal" data-target="#videoModal">
                    <i class="icofont-play-alt-2"></i>
                </a>
            </div>

            <!-- Video Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <video class="w-100" controls playsinline>
                                <source src="{{ asset('storage/videos/about.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title" style="padding-bottom: 0px;">
              <h2>¿Quienes Somos?</h2>
              <p>En Always Pro Painting, transformamos espacios desde 2022 con servicios profesionales de pintura, 
                reparación de drywall, texturizado y lavado a presión. Servimos con confiabilidad en Sarasota, Bradenton y áreas 
                circundantes, garantizando acabados duraderos, materialesde primera calidad, compromiso ambiental y atención experta.</p>
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
            <img src="{{ asset('storage/img/acabados.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Acabados duraderos</h4>
            <p class="text-justify">Nuestros servicios ofrecen acabados duraderos y de alta calidad, garantizando espacios impecables por más tiempo
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('storage/img/materiales.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Materiales premium</h4>
            <p class="text-justify">
              Utilizamos solo materiales premium en cada proyecto para garantizar un resulado final de alta calidad que mejora la apariencia y protege las superficies.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('storage/img/compromiso.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Compromiso Ambiental</h4>
            <p class="text-justify">
              Nuestro compromiso ambiental nos impulsa a utilizar productos ecológicos, asegurando que cada proyecto sea sostenible, y seguro para el planeta
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/cuidado.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Cuidado experto</h4>
            <p class="text-justify">
              A diferencia de otras empresas, nuestro equipo de expertos garantiza un cuidado meticuloso en cada proyecto, asegurando la perfeccion en cada detalle.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/cumplimiento.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Cumplimiento garantizado</h4>
            <p class="text-justify">
              Comprometidos contigo, cumplimos plazos, presupuesto y alcance con profesionalismo, sin sorpresas ni retrasos.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/compromisopro.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Compromiso profesional</h4>
            <p class="text-justify">
              Garantizamos resultados confiables con profesionalismo, atención personalizada, entregas puntuales y altos estándares en cada proyecto.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/competitiva.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
            <h4 class="font-weight-bold text-center">Ventajas competitivas</h4>
            <p class="text-justify">
              Transformamos espacios con productos ecológicos y acabados duraderos, garantizando calidad, confianza y compromiso ambiental.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/img/aval.png') }}" alt="Acabados duraderos" class="rounded" style="max-width: 200px; border-radius: 15px;">
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
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">+80</span>
              <p>Clientes Felices</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">+400</span>
              <p>Proyectos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-paint-brush" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">+1.920</span>
              <p>Horas de Soporte</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">6</span>
              <p>Trabajadores esforzados</p>
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
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/drywall.png') }}'); padding:4px;">
            <div class="content-box">
              <h3>Drywall</h3>
              <p>Acabados de drywall perfectos, duraderos y confiables
              </p>
              <div class="hover-text"><a href="{{ route('drywall') }}">No lo sueñes, ¡vívelo! 
              <br>
              haz clic y obsérvalo</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/pinturainteriorexterior.png') }}');">
            <div class="content-box">
              <h3>Pintura<br>Exterior & Interior</h3>
              <p>Color, precisión y estilo para tu hogar y oficina
              </p>
              <div class="hover-text"><a href="{{ route('pintura') }}">No lo imagines, ¡míralo con un clic!
              </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/lavadoapresion.png') }}');">
            <div class="content-box">
              <h3>Lavado a presión</h3>
              <p>Limpio y como nuevo, sin químicos agresivos
              </p>
              <div class="hover-text"><a href="{{ route('lavado') }}">Los detalles importan, y nosotros los hacemos destacar: empieza con un clic
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/texturizado.png') }}'); padding:4px;">
            <div class="content-box">
              <h3>Texturizado</h3>
              <p>Moderno, cobertura perfecta y duradera
              </p>
              <div class="hover-text"><a href="{{ route('texturizado') }}">Haz clic y descubre como adaptamos cada textura a tu estilo
              </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/duchas.png') }}');">
            <div class="content-box">
              <h3>Duchas y<br>Bañeras</h3>
              <p>Dale brillo, protección y estilo a tu ducha o bañera
              </p>
              <div class="hover-text"><a href="{{ route('duchas') }}">Dale un cambio profesional y duradero a tu espacio, ¡haz clic ahora!
              </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/senalizacion.png') }}');">
            <div class="content-box">
              <h3>Señalización</h3>
              <p>Pintura vial y señalización precisa, seguridad y visibilidad garantizadas
              </p>
              <div class="hover-text"><a href="{{ route('senalizacion') }}">Resultados limpios, precisos y garantizados. Compruébelo con un clic
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/whatsapp.png') }}'); padding:4px;">
            <div class="content-box">
              <h3 style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(37,211,102,0.7));">Whatsapp</h3>
              <p>Presupuesto gratis, Contáctanos
              </p>
              <div class="hover-text"><a href="{{ route('wsp') }}">¡haz clic! y agenda tu evaluación gratuita
              </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/vinculacion.png') }}');">
            <div class="content-box">
              <h3>Vinculación<br>Comunitaria</h3>
              <p>Renovamos espacios públicos con criterios ecológicos
              </p>
              <div class="hover-text">
                <a href="{{ route('vinculacion') }}">Haz clic y conoce como sumamos color, vida y sostenibilidad a Sarasota y Bradenton
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/email.png') }}');">
            <div class="content-box">
              <h3>Email</h3>
              <p>¿Tienes un proyecto? Escríbenos y obtén una cotización gratuita
              </p>
              <div class="hover-text"><a href="{{ route('email') }}">Haz clic para transformar tu espacio. Solicita presupuesto sin costo
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-trophy-alt"></i></div>
            <h4 class="title"><a href="">Texturizado o Drywall</a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-like"></i></div>
            <h4 class="title"><a href="">Lavado a Presión</a></h4>

          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Pintura Exterior e Interior</a></h4>
            
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Señalización</a></h4>
            
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-paint-brush"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
   <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Category 1</li>
              <li data-filter=".filter-card">Category 2</li>
              <li data-filter=".filter-web">Category 3</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-1.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-3.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-4.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-5.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-6.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> 
    <!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <!-- <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Frequently Asked Questions Section -->

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
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
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
    background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,255,0.7));
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
    background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(66,139,202,0.7));
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