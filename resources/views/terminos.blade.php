@extends('layouts.app')

@section('title', 'Página de Inicio')

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
          <h2>El Arte de renovar</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting damos nueva vida a propiedades residenciales y comerciales en Sarasota, Bradenton y alrededores.
                    con soluciones expertas en pintura, reparación de drywall, texturizado y lavado a presión.<br>
                    Combinamos técnica, creatividad y materiales de alto rendimiento para resultados duraderos, funcionales y realmente impactantes.
                </p>
            </div>
            <div class="col-12">
                <p>
                    <h3>Nuestros Servicios</h3>
                    <ul>
                        <li><strong>Pintura profesional interior/exterior: </strong>
                            Adaptada al clima de Florida. Incluye analisis técnico, preparación meticulosa y aplicación estrategica
                        </li>
                        <li><strong>Reparación de drywall y texturizado: </strong>
                            Correción de grietas, filtraciones y daños extructurales con acabados listos para pintar.
                        </li>
                        <li><strong>Lavado a presión ecológico: </strong>
                            Eliminación segura de moho, polvo y residuos para superficies listas para renovar.
                        </li>
                        <li>Soluciones personalizadas que aumenta el valor de tu propiedad</li>
                    </ul>
                    Solicite su evaluación gratuita y si lo deseas, también puedes recibir un plan de trabajo personalizado con garantía
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Dale valor a tu propiedad</h2>
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