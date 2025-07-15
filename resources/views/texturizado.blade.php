@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/servicios/texturizado.webp') }}');">
          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Diseño Profesional Para Espacios Con Personalidad</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    Dale un toque único a tus paredes y techos con los acabados texturizados de Always Pro Painting, modernos, resistentes y decorativos.
                    Aplicamos técnicas como knockdown, orange peel, skip trowel para realzar tus espacios, ocultar imperfecciones y crear acabados duraderos e impactantes.
                </p>
                <p>
                    Transformamos tus superficies con un servicio limpio, rápido y de alta calidad, adaptado a propiedades habitadas.
                    Nuestros materiales premium resisten el desgaste y la humedad, creando ambientes atractivos sin costosas remodelaciones
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3>Beneficios:</h3>
                    <ul style="list-style-type: none;">
                        <li>✓ Estilo moderno que añade valor estético y funcional
                        </li>
                        <li>✓ Oculta imperfecciones y unifica superficies dañadas.</li>
                        <li>✓ Acabado duradero, limpio y sin residuos.</li>
                        <li>✓ Ideal para hogares, oficinas y remodelaciones rápidas.</li>
                        <li>✓ Asesoría personalizada y aplicación profesional garantizada.</li>
                        
                    </ul>
                    Solicita hoy tu presupuesto gratuito y dale textura a tus espacios.
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Diseño, Durabilidad y Distinción en cada Acabado</h2>
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