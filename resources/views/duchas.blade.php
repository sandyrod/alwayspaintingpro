@extends('layouts.app')

@section('title', 'Duchas')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/servicios/duchas.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="renovate_bathroom_title">Renueva tu baño sin demoliciones ni complicaciones</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="bathroom_intro">
                    Dale nueva vida a tu baño con acabados duraderos, impermeables y de aspecto porcelanizado. 
                    En Always Pro Painting aplicamos recubrimientos epóxicos y poliuretanos de curado rapido, ideales para bañeras, azulejos y lavamanos.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong data-key="aesthetic_renovation_title">Logramos una renovación estética, higienica y funcional:</strong> <span data-key="aesthetic_renovation_desc">En menos de 48 horas, sin escombros ni gastos excesivos. 
                            Nuestra tecnología garantiza resistencia al uso diario, humedad y moho, con una superficie brillante, facil de limpiar y de larga duración.</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-key="shower_benefits_title">Beneficios:</li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li data-key="savings_benefit">✓ Hasta 70% de ahorro frente a remodelaciones tradicionales
                        </li>
                        <li data-key="porcelain_finish">✓ Acabado profesional tipo porcelana, sin peladuras ni decoloración</li>
                        <li data-key="adaptable_application">✓ Aplicación adaptable a propiedades habitadas</li>
                        <li data-key="post_application_advice">✓ Asesoría post-aplicación y mantenimiento incluido</li>
                    </ul>
                    <span data-key="request_free_consultation">Solicita tu consulta gratuita y transforma tu baño hoy.</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="efficiency_aesthetics_durability">Eficiencia, estética y durabilidad, todo en uno</h2>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de duchas cargada');
    </script>
@endpush