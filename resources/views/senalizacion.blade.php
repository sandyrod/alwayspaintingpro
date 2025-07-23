@extends('layouts.app')

@section('title', 'Señalización')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/servicios/senalizacion.webp') }}');">
          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="road_signage_title">Señalización vial y pintura industrial de alto desempeño</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="signage_intro">
                    En Always Pro Painting, somos especialistas en señalizacion vial y áreas prioritarias. Utilizamos recubrimientos de alta resistencia que soportan tráfico intenso y climas extremos,
                    cumpliendo con normativas ADA y DOT para máxima visibilidad y seguridad.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li><strong data-key="electric_mobility_solutions_title">Soluciones para Movilidad Eléctrica:</strong> <span data-key="electric_mobility_solutions_desc">Aplicamos pintura conductiva y antiderrapante con pigmentos reflectivos
                        de última generación para estaciones de carga, mejorando la seguridad y el orden urbano.</span>
                        </li>
                        <li><strong data-key="durable_renovation_title">Renovación Duradera:</strong> <span data-key="durable_renovation_desc">Prolongamos la vida útil de estacionamientos y zonas comunes hasta 3 veces más con sistemas epóxicos y acrílicos
                        industriales de bajo VOC y curado rápido.</span>
                        </li>
                        <li><strong data-key="benefits_title">Beneficios</strong>
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li data-key="uninterrupted_application">✓ Aplicación sin interrupciones.
                        </li>
                        <li data-key="technical_reports">✓ Informes técnicos y mantenimiento predictivo.</li>
                        <li data-key="certified_eco_materials">✓ Materiales ecológicos certificados.</li>
                    </ul>
                    <span data-key="create_safe_spaces">Crea espacios seguros y funcionales, solicita tu evaluación gratuita.</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="visibility_transforms_spaces">Visibilidad que transforma espacios en lugares seguros</h2>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de señalización cargada');
    </script>
@endpush