@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<section id="hero" style="margin-top: 60px; padding-top: 0;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">


          <!-- Slide 2 -->
          <div class="carousel-item active slide-2-bg" role="option" aria-selected="true">
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
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </div>
  </section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>El Arte de renovar</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting damos nueva vida a propiedades residenciales y comerciales en Sarasota, Bradenton y alrededores.
                    con soluciones expertas en pintura, reparación de drywall, texturizado y lavado a presión.<br>
                    Combinamos técnica, creatividad y materiales de alto rendimiento para resultados duraderos, funcionales y realmente impactantes.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3>Nuestros Servicios</h3>
                    <ul>
                        <li><strong>Pintura profesional interior/exterior: </strong>
                            Adaptada al clima de Florida. Incluye analisis técnico, preparación meticulosa y aplicación estrategica
                        </li>
                        <li><strong>Reparación de drywall y texturizado: </strong>
                            Correción de grietas, filtraciones y daños extructurales con acabados listos para pintar.
                        </li>
                        <li><strong>Lavado a presión ecológico: </strong>
                            Eliminación segura de moho, polvo y residuos para superficies listas para renovar.
                        </li>
                        <li>Soluciones personalizadas que aumenta el valor de tu propiedad</li>
                    </ul>
                    Solicite su evaluación gratuita y si lo deseas, también puedes recibir un plan de trabajo personalizado con garantía
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Dale valor a tu propiedad</h2>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de inicio cargada');
    </script>
@endpush