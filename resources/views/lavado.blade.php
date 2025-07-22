@extends('layouts.app')

@section('title', 'Nosotros')

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
          <h2>Limpieza profesional y segura</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting. revitalizamos tus espacios exteriores con tecnología avanzada de lavado a presión. Eliminamos moho, polvo y manchas de forma eficaz, sin usar quimicos agresivos, cuidando a tu familia y al medio ambiente.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong>Resultados visibles y rápidos:</strong> Nuestros equipos de alta presión y técnicas especializadas 
                            eliminan años de suciedad en fachadas, pisos y áreas exteriores, dejando una renovación evidente.
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <strong>Beneficios:</strong>
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li>✓ Sin químicos dañinos, seguro para niños y mascotas
                        </li>
                        <li>✓ Prácticas ecológicas que protegen los recursos naturales</li>
                        <li>✓ Superficies preparadas para pintura y otros tratamientos</li>
                    </ul>
                    <ul>
                        <li>
                            <strong>Excelencia y Atención al Detalle:</strong> Cada proyecto se realiza con precisión por profesionales capacitados en todo
                            tipo de superficies, garantizando resultados impecables y duraderos.
                        </li>
                    </ul>
                    Solicita hoy tu inspección gratuita y elimina la mugre.
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Calidad que perdura, servicio que conquista</h2>
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