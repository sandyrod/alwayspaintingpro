@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/senalizacionheader.png') }}');">
          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Señalización vial y pintura industrial de alto desempeño</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting, somos especialistas en señalizacion vial y áreas prioritarias. Utilizamos recubrimientos de alta resistencia que soportan tráfico intenso y climas extremos,
                    cumpliendo con normativas ADA y DOT para máxima visibilidad y seguridad.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li><strong>Soluciones para Movilidad Eléctrica:</strong> Aplicamos pintura conductiva y antiderrapante con pigmentos reflectivos
                        de última generación para estaciones de carga, mejorando la seguridad y el orden urbano.
                        </li>
                        <li><strong>Renovación Duradera:</strong> Prolongamos la vida útil de estacionamientos y zonas comunes hasta 3 meces más con sistemas epóxicos y acrílicos
                        industriales de bajo VOC y curado rápido.
                        </li>
                        <li><strong>Beneficios:</strong> Prolongamos la vida útil de estacionamientos y zonas comunes hasta 3 meces más con sistemas epóxicos y acrílicos
                        industriales de bajo VOC y curado rápido.
                        </li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li>✓ Aplicación sin interrupciones.
                        </li>
                        <li>✓ Informes técnicos y mantenimiento predictivo.</li>
                        <li>✓ Materiales ecológicos certificados.</li>
                    </ul>
                    Crea espacios seguros y funcionales, solicita tu evaluación gratuita.
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Visibilidad que transforma espacios en lugares seguros</h2>
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