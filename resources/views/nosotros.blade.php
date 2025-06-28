@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/slide/servicios.png') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Espacios renovados, Creamos emociones duraderas</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    Transformamos hogares y negocios en Sarasota y Bradenton con servicios profesionales de pintura interior y exterior, reparación de panel de yeso y lavado a presión.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3>¿Que nos hace diferentes?</h3>
                    <ul style="list-style-type: none;">
                        <li>✓ Usamos materiales premium resistentes al clima de Florida y técnicas modernas que garantizan resultados 
                            impecables
                        </li>
                        <li>✓ Nuestro personal técnico cuida cada detalle para elevar el valor de su propiedad con precisión y compromiso ambiental</li>
                        <li>✓ Ofrecemos atención personalizada y presupuestos 100% gratuitos</li>
                        <li>✓ Combinamos confiabilidad, profesionalismo y pasión por transformar espacios</li>
                        <li>✓ Desde la primera cotización hasta la entrega final, te garantizamos una experiencia sin complicaciónes y un acabado que inspira emociones</li>
                        
                    </ul>
                    Solicite un presupuesto gratuito y dejanos demostrarte por qué nuestros clientes confian en nosotros
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