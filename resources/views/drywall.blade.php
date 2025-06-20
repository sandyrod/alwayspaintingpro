@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/drywallheader.png') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Instalación o reparación de drywall</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting, restauramos paredes y techos con precisión técnica y acabados invisibles. Eliminamos grietas, humedad, impactos y errores de instalación con soluciones duraderas, listas para pintar.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong>Reparaciones avanzadas con resultados profesionales:</strong>Utilizamos técnocas certifcadas y materiales de alta calidad para integrar cada reparación de forma imperceptble en la superficie existente
                        </li>
                    </ul>
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong>Beneficios:</strong>
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li>✓ Reparaciones estructurales, no parches temporales.
                        </li>
                        <li>✓ Tiempo de respuesta rápida y eficiente.</li>
                        <li>✓ Superficies lisas, ideales para pintar.</li>
                        <li>✓ Garantía escrita y durabilidad comprobada.</li>
                    </ul>
                    Desde pequeñas grietas hasta reconstrucciones mayores, brindamos soluciones personalizadas con asesoría técnica gratuita, materiales certificados y control de calidd en cada etapa
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Resultados Impecables y Garantizados</h2>
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