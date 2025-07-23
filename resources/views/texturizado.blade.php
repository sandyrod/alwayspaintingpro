@extends('layouts.app')

@section('title', 'Texturizado')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/texturizado.webp') }}');">
          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="professional_design_title">Diseño Profesional Para Espacios Con Personalidad</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="texturing_intro">
                    Dale un toque único a tus paredes y techos con los acabados texturizados de Always Pro Painting, modernos, resistentes y decorativos.
                    Aplicamos técnicas como knockdown, orange peel, skip trowel para realzar tus espacios, ocultar imperfecciones y crear acabados duraderos e impactantes.
                </p>
                <p data-key="transform_surfaces">
                    Transformamos tus superficies con un servicio limpio, rápido y de alta calidad, adaptado a propiedades habitadas.
                    Nuestros materiales premium resisten el desgaste y la humedad, creando ambientes atractivos sin costosas remodelaciones
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3 data-key="texturing_benefits_title">Beneficios:</h3>
                    <ul style="list-style-type: none;">
                        <li data-key="modern_style">✓ Estilo moderno que añade valor estético y funcional
                        </li>
                        <li data-key="hides_imperfections">✓ Oculta imperfecciones y unifica superficies dañadas.</li>
                        <li data-key="durable_finish">✓ Acabado duradero, limpio y sin residuos.</li>
                        <li data-key="ideal_for_homes">✓ Ideal para hogares, oficinas y remodelaciones rápidas.</li>
                        <li data-key="personalized_advice">✓ Asesoría personalizada y aplicación profesional garantizada.</li>
                        
                    </ul>
                    <span data-key="request_free_quote">Solicita hoy tu presupuesto gratuito y dale textura a tus espacios.</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="design_durability_distinction">Diseño, Durabilidad y Distinción en cada Acabado</h2>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de texturizado cargada');
    </script>
@endpush