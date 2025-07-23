@extends('layouts.app')

@section('title', 'Drywall')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/drywall2.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="drywall_installation_repair">Instalación o reparación de drywall</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="drywall_intro">
                    En Always Pro Painting, restauramos paredes y techos con precisión técnica y acabados invisibles. Eliminamos grietas, humedad, impactos y errores de instalación con soluciones duraderas, listas para pintar.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong data-key="advanced_repairs_title">Reparaciones avanzadas con resultados profesionales: </strong><span data-key="advanced_repairs_desc">Utilizamos técnicas certificadas y materiales de alta calidad para integrar cada reparación de forma imperceptible en la superficie existente</span>
                        </li>
                    </ul>
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong data-key="drywall_benefits_title">Beneficios:</strong>
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li data-key="structural_repairs">✓ Reparaciones estructurales, no parches temporales.
                        </li>
                        <li data-key="quick_response_time">✓ Tiempo de respuesta rápida y eficiente.</li>
                        <li data-key="smooth_surfaces">✓ Superficies lisas, ideales para pintar.</li>
                        <li data-key="written_warranty">✓ Garantía escrita y durabilidad comprobada.</li>
                    </ul>
                    <span data-key="custom_solutions">Desde pequeñas grietas hasta reconstrucciones mayores, brindamos soluciones personalizadas con asesoría técnica gratuita, materiales certificados y control de calidd en cada etapa</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="impeccable_guaranteed_results">Resultados Impecables y Garantizados</h2>
                </p>
            </div>
            <div class="text-center w-100 mt-4">
                <a href="{{ route('texturizado') }}" class="custom-button">
                  <span class="button-text" data-key="texturing">Texturizado </span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
              
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de drywall cargada');
    </script>
@endpush