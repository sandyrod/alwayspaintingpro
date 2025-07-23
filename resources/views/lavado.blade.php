@extends('layouts.app')

@section('title', 'Lavado')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/lavado.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="professional_safe_cleaning">Limpieza profesional y segura</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="pressure_washing_intro">
                    En Always Pro Painting. revitalizamos tus espacios exteriores con tecnología avanzada de lavado a presión. Eliminamos moho, polvo y manchas de forma eficaz, sin usar quimicos agresivos, cuidando a tu familia y al medio ambiente.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong data-key="visible_quick_results_title">Resultados visibles y rápidos:</strong> <span data-key="visible_quick_results_desc">Nuestros equipos de alta presión y técnicas especializadas 
                            eliminan años de suciedad en fachadas, pisos y áreas exteriores, dejando una renovación evidente.</span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <strong data-key="benefits_title">Beneficios:</strong>
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li data-key="no_harmful_chemicals">✓ Sin químicos dañinos, seguro para niños y mascotas
                        </li>
                        <li data-key="eco_friendly_practices">✓ Prácticas ecológicas que protegen los recursos naturales</li>
                        <li data-key="surfaces_ready_for_paint">✓ Superficies preparadas para pintura y otros tratamientos</li>
                    </ul>
                    <ul>
                        <li>
                            <strong data-key="excellence_attention_detail_title">Excelencia y Atención al Detalle:</strong> <span data-key="excellence_attention_detail_desc">Cada proyecto se realiza con precisión por profesionales capacitados en todo
                            tipo de superficies, garantizando resultados impecables y duraderos.</span>
                        </li>
                    </ul>
                    <span data-key="request_free_inspection">Solicita hoy tu inspección gratuita y elimina la mugre.</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="lasting_quality_tagline">Calidad que perdura, servicio que conquista</h2>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de lavado cargada');
    </script>
@endpush