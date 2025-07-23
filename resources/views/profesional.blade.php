@extends('layouts.app')

@section('title', 'Profesional')

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
          <h2 data-key="professional_transformations_title">Transformaciones profesionales</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="professional_transformations_intro">
                    En Always Pro Painting transformamos hogares y negocios con acabados duraderos y colores estratégicos, aplicando tecnicas de alta precisión. Vea nuestros impactantes "antes y despues" y descubra la diferencia que marcan los detalles.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    <h3><strong data-key="specialized_services_title">Servicios especializados:</strong></h3>
                    <ul>
                        <li><strong data-key="professional_painting_interior_exterior">Pintura profesional interior y exterior: </strong><span data-key="professional_painting_interior_exterior_desc">Perfecta para techos, baños y fachadas. Formulas resistentes a humedad, desgaste y hongos</span></li>
                        <li><strong data-key="drywall_repair_texturing">Reparacion de drywall y texturizado impecable: </strong><span data-key="drywall_repair_texturing_desc">Eliminamos grietas e imperfecciones para un acabado perfecto, listo para pintar</span></li>
                        <li><strong data-key="high_impact_pressure_washing">Lavado a presion de alto impacto: </strong><span data-key="high_impact_pressure_washing_desc">Revitaliza superficies, elimina el moho y prepara para nuevos acabados</span></li>
                    </ul>
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3 data-key="why_choose_us_title">¿Porque elegirnos?</h3>
                    <ul style="list-style-type: none;">
                        <li data-key="guaranteed_results">✓ Resultados garantizados</li>
                        <li data-key="certified_technicians">✓ Técnicos certificados</li>
                        <li data-key="premium_materials">✓ Materiales premium</li>
                        <li data-key="personalized_attention">✓ Atención personalizada</li>
                        
                    </ul>
                    <span data-key="request_free_evaluation_areas">Solicite su evaluación gratuita en Sarasota, Bradenton y áreas cercanas</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="before_after_professional">Tu "antes" merece nuestro "despues" profesional</h2>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página profesional cargada');
    </script>
@endpush