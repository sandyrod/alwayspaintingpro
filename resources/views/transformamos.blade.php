@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/slide/slide-1.png') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Expresión de Sentimientos</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting convertimos hogares y negocios en lugares que inspiran. Ofrecemos servicios profesionales de pintura interior y 
                    exterior, instalacion o reparación de drywall y lavado a presion en Sarasota, Bradenton y alrededores.
                    <ul>
                        <li>Acabados duraderos e impecables</li>
                        <li>Materiales premium y resistentes al clima humedo de florida</li>
                        <li>Técnicos certificados y meticulosa preparación</li>
                        <li>Soluciones personalizadas que aumenta el valor de tu propiedad</li>
                    </ul>
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3>¿Porque elegir Always Pro Paiting?</h3>
                    <ul style="list-style-type: none;">
                        <li>✓ Pintores profesionales y en constante formación</li>
                        <li>✓ Técnicas modernas y resultados garantizados</li>
                        <li>✓ Miembros acreditados por el Better Business Bureau</li>
                        <li>✓ Presupuestos 100% gratuitos y asesoría personalizada</li>
                        <li>✓ Nos aseguramos de que cada proyecto se realice con el maximo cuidado y atención al cliente</li>
                    </ul>
                    Obten tu presupuesto sin costo
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Crea el espacio de tus sueños</h2>
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