@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{ asset('storage/img/slide/slide-1.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"> <span></span></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="{{ route('transformamos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{ asset('storage/img/slide/slide-2.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="{{ route('arte') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{ asset('storage/img/slide/slide-3.png') }}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="{{ route('profesional') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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
    <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{ asset('storage/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://youtu.be/UEm6PG5PwkU?si=T0JL_d-HROpRanGC" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>¿Quienes Somos?</h2>
              <p></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"></h4>
              <p class="description">En Always Pro Painting, transformamos espacios desde 2022 con serviciosprofesionales de pintura, 
                reparación de drywall, texturizado y lavado a presión. Servimos con confiabilidad en Sarasota, Bradenton y áreas 
                circundantes, garantizando acabados duraderos, materialesde primera calidad, compromiso ambiental y atención experta.<br>
                <strong> <a href="{{ route('nosotros') }}">¡Comienza tu renovación hoy!</a></strong>
              </p>
            </div>

            

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">

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
              <p>Acabados perfectos en drywall. Soluciones, resultados duraderos</p>
              <div class="hover-text"><a href="{{ route('drywall') }}">No lo imagines más, <br>
                ¡has click y miralo con tus ojos!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/pinturainteriorexterior.png') }}');">
            <div class="content-box">
              <h3>Pintura<br>Exterior & Interior</h3>
              <p>Color, precisión y estilo para hogares y oficina</p>
              <div class="hover-text"><a href="{{ route('pintura') }}">No lo imagines más, <br>
                ¡has click y miralo con tus ojos!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/lavadoapresion.png') }}');">
            <div class="content-box">
              <h3>Lavado a presión</h3>
              <p>Luce como nuevo. Limpieza profunda sin quimicos agresivos</p>
              <div class="hover-text"><a href="{{ route('lavado') }}">Los detalles si<br> importan, y nosotros<br> sabemos como hacerlos destacar, <br>comienza con un clic.</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/texturizado.png') }}'); padding:4px;">
            <div class="content-box">
              <h3>Texturizado</h3>
              <p>Moderno, cobertura perfecta, acabado duradero</p>
              <div class="hover-text"><a href="{{ route('texturizado') }}">Haz clic y conoce cómo <br>
                personalizamos cada<br> textura a tu estilo</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/duchas.png') }}');">
            <div class="content-box">
              <h3>Duchas y<br>Bañeras</h3>
              <p>Brillo, proteccion y estilo<br> para tu ducha o bañera</p>
              <div class="hover-text"><a href="{{ route('duchas') }}">Tu espacio merece un cambio profesional, <br>
                visual y duradero. Haz<br>
                clic ahora</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/senalizacion.png') }}');">
            <div class="content-box">
              <h3>Señalización</h3>
              <p>Pintura vial precisa.<br>
                 Seguridad y visibilidad en cada trazo
              </p>
              <div class="hover-text"><a href="{{ route('senalizacion') }}">Ofrecemos resultados<br> limpios, precisos y garantizados.<br> Compruebelo usted mismo con un clic.</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/whatsapp.png') }}'); padding:4px;">
            <div class="content-box">
              <h3 style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(37,211,102,0.7));">Whatsapp</h3>
              <p>Contáctanos para tu presupuesto gratis</p>
              <div class="hover-text"><a href="{{ route('wsp') }}">Has clic y agenda tu<br> evaluación gratuita.</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/vinculacion.png') }}');">
            <div class="content-box">
              <h3>Vinculación<br>Comunitaria</h3>
              <p>Renovamos espacios<br> públicos con conciencia<br> ambiental</p>
              <div class="hover-text">
                <a href="{{ route('vinculacion') }}">Has clic y conoce como sumamos color, vida y sostenibilidad en Sarasota y Bradenton.</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/email.png') }}');">
            <div class="content-box">
              <h3>Email</h3>
              <p>¿Proyecto en mente?<br>
                  Escribenos y cotizamos<br> gratis sin compromiso
              </p>
              <div class="hover-text"><a href="{{ route('email') }}">Haz clic para<br> transformar tu espacio.<br> Solicita presupuesto sin costo</a>
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
    <!-- <section id="portfolio" class="portfolio section-bg">
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
    </section> -->
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
    <section id="contact" class="contact">
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
              <p>luis@alwayspropainting.com<br></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 (727) 417-6867<br></p>
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
    margin-bottom: 20px;
    padding: 0;
  }

  .content-box {
    position: absolute;
    bottom: 20px;
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