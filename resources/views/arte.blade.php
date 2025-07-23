@extends('layouts.app')

@section('title', 'Arte')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/slide/slide-2.png') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2 data-key="art_of_renovation_title">El Arte de renovar</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p data-key="art_intro_text">
                    En Always Pro Painting damos nueva vida a propiedades residenciales y comerciales en Sarasota, Bradenton y alrededores.
                    con soluciones expertas en pintura, reparación de drywall, texturizado y lavado a presión.<br>
                    Combinamos técnica, creatividad y materiales de alto rendimiento para resultados duraderos, funcionales y realmente impactantes.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3 data-key="our_services_title">Nuestros Servicios</h3>
                    <ul>
                        <li><strong data-key="professional_painting_title">Pintura profesional interior/exterior: </strong>
                            <span data-key="professional_painting_desc">Adaptada al clima de Florida. Incluye analisis técnico, preparación meticulosa y aplicación estrategica</span>
                        </li>
                        <li><strong data-key="drywall_repair_title">Reparación de drywall y texturizado: </strong>
                            <span data-key="drywall_repair_desc">Correción de grietas, filtraciones y daños extructurales con acabados listos para pintar.</span>
                        </li>
                        <li><strong data-key="eco_pressure_washing_title">Lavado a presión ecológico: </strong>
                            <span data-key="eco_pressure_washing_desc">Eliminación segura de moho, polvo y residuos para superficies listas para renovar.</span>
                        </li>
                        <li data-key="custom_solutions">Soluciones personalizadas que aumenta el valor de tu propiedad</li>
                    </ul>
                    <span data-key="request_free_evaluation">Solicite su evaluación gratuita y si lo deseas, también puedes recibir un plan de trabajo personalizado con garantía</span>
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2 data-key="add_value_property">Dale valor a tu propiedad</h2>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de arte cargada');
    </script>
@endpush