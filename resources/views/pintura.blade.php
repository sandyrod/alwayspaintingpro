@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/slide/pintura.png') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Acabados de excelencia</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting combinamos materiales premium, tecnología avanzada y técnicas certificadas para crear acabados impecables, duraderos y resistentes al clima de Florida, protegiendo tu inversión.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong>Precisión en cada detalle: </strong>Nuestro riguroso proceso de 27 puntos -incluye lijado, sellado y nivelacion- garantiza una preparación perfeca para resultados que realzan el valor y estilo.
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <strong>Beneficios: </strong>
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li>✓ Proteccion total contra humedad, salitre y rayos UV.
                        </li>
                        <li>✓ Acabados premium que valorizan tu propiedad.</li>
                        <li>✓ Tranquilidad con respaldo escrito y 3 años de experiencia comprobada.</li>
                        <li>✓ Resultados visibles y comprobables en residencias y comercios.</li>
                    </ul>
                    Recupera la belleza de tus fachadas, pisos y techos con nuestra evaluación gratuita
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Protege, embellece y valoriza tu propiedad</h2>
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