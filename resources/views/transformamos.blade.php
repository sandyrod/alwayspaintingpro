@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
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
          <h2>Expresión de Sentimientos</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting convertimos hogares y negocios en lugares que inspiran. Ofrecemos servicios profesionales de pintura interior y 
                    exterior, instalacion o reparación de drywall y lavado a presion en Sarasota, Bradenton y alrededores.
                    <ul>
                        <li>Acabados duraderos e impecables</li>
                        <li>Materiales premium y resistentes al clima humedo de florida</li>
                        <li>Técnicos certificados y meticulosa preparación</li>
                        <li>Soluciones personalizadas que aumenta el valor de tu propiedad</li>
                    </ul>
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3>¿Porque elegir Always Pro Paiting?</h3>
                    <ul style="list-style-type: none;">
                        <li>✓ Pintores profesionales y en constante formación</li>
                        <li>✓ Técnicas modernas y resultados garantizados</li>
                        <li>✓ Miembros acreditados por el Better Business Bureau</li>
                        <li>✓ Presupuestos 100% gratuitos y asesoría personalizada</li>
                        <li>✓ Nos aseguramos de que cada proyecto se realice con el maximo cuidado y atención al cliente</li>
                    </ul>
                    Obten tu presupuesto sin costo
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Crea el espacio de tus sueños</h2>
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