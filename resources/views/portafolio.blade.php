@extends('layouts.app')

@section('title', 'Portafolio')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/portafolio/portafolio.webp') }}');">
          </div>
        </div>
    </div>
</section>
<section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2 data-key="our_portfolio">Nuestro portafolio</h2>
          <p style="text-align:start" data-key="portfolio_intro">En Always Pro Painting, renovamos espacios en Sarasota y Bradenton, creando ambientes inspiradores. Ofrecemos servicios de pintura interior y exterior, restauración de drywall, lavado a presión y renovación de gabinetes, combinando precisión, creatividad y calidad. Nuestro portafolio demuestra cómo transformamos hogares y negocios, aportando valor y estilo a cada proyecto. Contáctanos para dar vida a tu visión.
</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active" data-key="filter_all">All</li>
              <li data-filter=".filter-drywall" data-key="filter_drywall">Drywall</li>
              <li data-filter=".filter-bannos" data-key="filter_bathrooms">Baños</li>
              <li data-filter=".filter-pintura" data-key="filter_painting">Pintura</li>
              <li data-filter=".filter-lavado" data-key="filter_pressure_washing">Lavado a Presión</li>
              <li data-filter=".filter-vinculacion" data-key="filter_community_engagement">Vinculacion Comunitaria</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-drywall">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/drywall/1.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_drywall">Drywall</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/drywall/1.webp') }}" data-gall="portfolioGallery" class="venobox" title="Drywall"><i class="icofont-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pintura">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/pintura/1.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_painting">Pintura</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/pintura/1.webp') }}" data-gall="portfolioGallery" class="venobox" title="Puntura"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bannos">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/bannos/1.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_bathrooms">Baños</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/bannos/1.webp') }}" data-gall="portfolioGallery" class="venobox" title="Baños"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lavado">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/lavado/1.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_pressure_washing">Lavado a Presión</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/lavado/1.webp') }}" data-gall="portfolioGallery" class="venobox" title="Lavado a Presion"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vinculacion">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/vinculacion/1.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_community_engagement">Vinculación Comunitaria</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/vinculacion/1.webp') }}" data-gall="portfolioGallery" class="venobox" title="Vinculación Comunitaria"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-drywall">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/drywall/2.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_drywall">Drywall</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/drywall/2.webp') }}" data-gall="portfolioGallery" class="venobox" title="Drywall"><i class="icofont-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pintura">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/pintura/2.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_painting">Pintura</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/pintura/2.webp') }}" data-gall="portfolioGallery" class="venobox" title="Puntura"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bannos">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/bannos/2.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_bathrooms">Baños</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/bannos/2.webp') }}" data-gall="portfolioGallery" class="venobox" title="Baños"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lavado">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/lavado/2.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_pressure_washing">Lavado a Presión</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/lavado/2.webp') }}" data-gall="portfolioGallery" class="venobox" title="Lavado a Presion"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vinculacion">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/vinculacion/2.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_community_engagement">Vinculación Comunitaria</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/vinculacion/2.webp') }}" data-gall="portfolioGallery" class="venobox" title="Vinculación Comunitaria"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-drywall">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/drywall/3.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_drywall">Drywall</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/drywall/3.webp') }}" data-gall="portfolioGallery" class="venobox" title="Drywall"><i class="icofont-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pintura">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/pintura/3.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_painting">Pintura</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/pintura/3.webp') }}" data-gall="portfolioGallery" class="venobox" title="Puntura"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bannos">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/bannos/3.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_bathrooms">Baños</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/bannos/3.webp') }}" data-gall="portfolioGallery" class="venobox" title="Baños"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lavado">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/lavado/3.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_pressure_washing">Lavado a Presión</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/lavado/3.webp') }}" data-gall="portfolioGallery" class="venobox" title="Lavado a Presion"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vinculacion">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/vinculacion/3.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_community_engagement">Vinculación Comunitaria</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/vinculacion/3.webp') }}" data-gall="portfolioGallery" class="venobox" title="Vinculación Comunitaria"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-drywall">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/drywall/4.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_drywall">Drywall</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/drywall/4.webp') }}" data-gall="portfolioGallery" class="venobox" title="Drywall"><i class="icofont-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pintura">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/pintura/4.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_painting">Pintura</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/pintura/4.webp') }}" data-gall="portfolioGallery" class="venobox" title="Puntura"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bannos">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/bannos/4.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_bathrooms">Baños</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/bannos/4.webp') }}" data-gall="portfolioGallery" class="venobox" title="Baños"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lavado">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/lavado/4.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_pressure_washing">Lavado a Presión</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/lavado/4.webp') }}" data-gall="portfolioGallery" class="venobox" title="Lavado a Presion"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vinculacion">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/vinculacion/4.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_community_engagement">Vinculación Comunitaria</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/vinculacion/4.webp') }}" data-gall="portfolioGallery" class="venobox" title="Vinculación Comunitaria"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-drywall">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/drywall/5.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_drywall">Drywall</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/drywall/5.webp') }}" data-gall="portfolioGallery" class="venobox" title="Drywall"><i class="icofont-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pintura">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/pintura/5.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_painting">Pintura</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/pintura/5.webp') }}" data-gall="portfolioGallery" class="venobox" title="Puntura"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bannos">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/bannos/5.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_bathrooms">Baños</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/bannos/5.webp') }}" data-gall="portfolioGallery" class="venobox" title="Baños"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lavado">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/lavado/5.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_pressure_washing">Lavado a Presión</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/lavado/5.webp') }}" data-gall="portfolioGallery" class="venobox" title="Lavado a Presion"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-drywall">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/drywall/6.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_drywall">Drywall</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/drywall/6.webp') }}" data-gall="portfolioGallery" class="venobox" title="Drywall"><i class="icofont-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pintura">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/pintura/6.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_painting">Pintura</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/pintura/6.webp') }}" data-gall="portfolioGallery" class="venobox" title="Puntura"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bannos">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/bannos/6.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_bathrooms">Baños</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/bannos/6.webp') }}" data-gall="portfolioGallery" class="venobox" title="Baños"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lavado">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portafolio/lavado/6.webp') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p data-key="portfolio_pressure_washing">Lavado a Presión</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portafolio/lavado/6.webp') }}" data-gall="portfolioGallery" class="venobox" title="Lavado a Presion"><i class="icofont-eye"></i></a>

                </div>
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section> 
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de portafolio cargada');
    </script>
@endpush