@extends('layouts.app')

@section('title', 'Vinculación')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/vinculacion.webp') }}');">
          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="beautify_sarasota_bradenton_title">Embellecemos Sarasota & Bradenton con propósito y conciencia</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="community_engagement_intro">
                    En Always Pro Painting transformamos espacios públicos con responsabilidad ambiental y compromiso local.
                    Renovamos escuelas, plazas y calles con pintura ecológica de bajo VOC, señalizacion clara y técnicas limpias que respetan el entorno.
                </p>
                <p data-key="community_impact_text">
                    Nuestro trabajo no solo mejora la estética urbana, sino que fortalece el sentido de pertenencia y apoya el desarrollo de la comunidad.<br>
                    Pintamos con propósito, conectamos con tu ciudad y dejamos una huella positiva que perdura.

                </p>
            </div>
            <div class="col-12">
                <p style="text-decoration: none;">
                    <strong data-key="community_benefits_title">Beneficios comunitarios:</strong><br>
                    <ul style="list-style-type: none;">
                        <li data-key="eco_friendly_paints">✓ Pinturas ecológicas de bajo VOC, seguras.
                        </li>
                        <li data-key="clear_road_signage">✓ Señalizacion vial clara para mayor seguridad.</li>
                        <li data-key="aesthetic_renovation">✓ Renovación estética sin interrupciones.</li>
                        <li data-key="active_community_participation">✓ Participación comuntaria activa</li>
                    </ul>
                    <span data-key="request_social_project">Solicita hoy tu proyecto social y ambiental. ¡Juntos damos color al futuro!</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h5 data-key="paint_with_purpose">Pintamos con propósito, embellecemos con conciencia</h5>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de vinculación cargada');
    </script>
@endpush