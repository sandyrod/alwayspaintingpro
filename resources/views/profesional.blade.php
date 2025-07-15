@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<section id="hero" style="margin-top: 60px; padding-top: 0;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 3 -->
          <div class="carousel-item active"  style="background-image: url('{{ asset('storage/img/slide/slide-3-def.webp') }}');" role="option" aria-selected="false">
            <img src="{{ asset('storage/img/slide/slide-3-def.webp') }}" alt="Slide 3" loading="lazy" style="display:none;" />
            <div class="carousel-container">
              <div class="carousel-content container">
                
                
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
          <h2>Transformaciones profesionales </h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting transformamos hogares y negocios con acabados duraderos y colores estratégicos, aplicando tecnicas de alta precisión. Vea nuestros impactantes "antes y despues" y descubra la diferencia que marcan los detalles.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <h3><strong>Servicios especializados:</strong></h3>
                    <ul>
                        <li><strong>Pintura profesional interior y exterior: </strong>Perfecta para techos, baños y fachadas. Formulas resistentes a humedad, desgaste y hongos</li>
                        <li><strong>Reparacion de drywall y texturizado impecable: </strong>Eliminamos grietas e imperfecciones para un acabado perfecto, listo para pintar</li>
                        <li><strong>Lavado a presion de alto impacto: </strong>Revitaliza superficies, elimina el moho y prepara para nuevos acabados</li>
                    </ul>
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3>¿Porque elegirnos?</h3>
                    <ul style="list-style-type: none;">
                        <li>✓ Resultados garantizados</li>
                        <li>✓ Técnicos certificados</li>
                        <li>✓ Materiales premium</li>
                        <li>✓ Atención personalizada</li>
                        
                    </ul>
                    Solicite su evaluación gratuita en Sarasota, Bradenton y áreas cercanas
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Tu "antes" merece nuestro "despues" profesional</h2>
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