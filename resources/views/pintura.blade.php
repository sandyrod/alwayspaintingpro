@extends('layouts.app')

@section('title', 'Pintura')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/pintura.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="excellence_finishes">Acabados de excelencia</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="painting_intro">
                    En Always Pro Painting combinamos materiales premium, tecnología avanzada y técnicas certificadas para crear acabados impecables, duraderos y resistentes al clima de Florida, protegiendo tu inversión.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong data-key="precision_detail_title">Precisión en cada detalle: </strong><span data-key="precision_detail_desc">Nuestro riguroso proceso de 27 puntos -incluye lijado, sellado y nivelacion- garantiza una preparación perfecta para resultados que realzan el valor y estilo.</span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <strong data-key="benefits_title">Beneficios: </strong>
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li data-key="total_protection">✓ Proteccion total contra humedad, salitre y rayos UV.
                        </li>
                        <li data-key="premium_finishes">✓ Acabados premium que valorizan tu propiedad.</li>
                        <li data-key="peace_of_mind">✓ Tranquilidad con respaldo escrito y 2 años de experiencia comprobada.</li>
                        <li data-key="visible_results">✓ Resultados visibles y comprobables en residencias y comercios.</li>
                    </ul>
                    <span data-key="recover_beauty">Recupera la belleza de tus fachadas, pisos y techos con nuestra evaluación gratuita</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="protect_beautify_property">Protege, embellece y valoriza tu propiedad</h2>
                </p>
            </div>
            <div class="text-center w-100 mt-4">
            <a href="{{ route('duchas') }}" class="custom-button">
                  <span class="button-text" data-key="showers_button">Duchas </span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
                <a href="{{ route('senalizacion') }}" class="ml-3 custom-button">
                  <span class="button-text" data-key="signage_button">Señalización </span>
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
        console.log('Página de pintura cargada');
    </script>
@endpush