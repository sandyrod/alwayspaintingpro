@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/slide/duchas.png') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Renueva tu baño sin demoliciones ni complicaciones</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    Dale nueva vida a tu baño con acabados duraderos, impermeables y de aspecto porcelanizado. 
                    En Always Pro Painting aplicamos recubrimientos epóxicos y poliuretanos de curado rapido, ideales para bañeras, azulejos y lavamanos.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <ul>
                        <li>
                            <strong>Logramos una renovación estética, higienica y funcional:</strong> En menos de 48 horas, sin escombros ni gastos excesivos. 
                            Nuestra tecnología garantiza resistencia al uso diario, humedad y moho, con una superficie brillante, facil de limpiar y de larga duración.
                        </li>
                    </ul>
                    <ul>
                        <li>Beneficios:</li>
                    </ul>
                    <ul style="list-style-type: none;">
                        <li>✓ Hasta 70% de ahorro frente a remodelaciones tradicionales
                        </li>
                        <li>✓ Acabado profesional tipo porcelana, sin peladuras ni decoloración</li>
                        <li>✓ Aplicación adaptable a propiedades habitadas</li>
                        <li>✓ Asesoría post-aplicación y mantenimiento incluido</li>
                    </ul>
                    Solicita tu consulta gratuita y transforma tu baño hoy.
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Eficiencia, estética y durabilidad, todo en uno</h2>
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