@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/servicios/vinculacion.webp') }}');">
          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">

        <div class="section-title">
          <h2>Embellecemos Sarasota & bradenton con proposito y conciencia</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    En Always Pro Painting transformamos espacios públicos con responsabilidad ambiental y compromiso local.
                    Renovamos escuelas, plazas y calles con pintua ecológica de bajo VOC, señalizacion clara y técnicas limpias que respetan el entorno.
                </p>
                <p>
                    Nuestro trabajo no solo mejora la estética urbana, sino que fortalece el sentido de pertenencia y apoya el desarrollo de la comunidad.<br>
                    Pintamos con propósito, conectamos con tu ciudad y dejamos una huella positiva que perdura.

                </p>
            </div>
            <div class="col-12">
                <p>
                    <strong>Beneficios comunitarios:<strong><br>
                    <ul style="list-style-type: none;">
                        <li>✓ Pinuras ecológicas de bajo VOC, seguras.
                        </li>
                        <li>✓ Señalizacion vial clara para mayor seguridad.</li>
                        <li>✓ Renovación estética sin interrupciones.</li>
                        <li>✓ Participación comuntaria activa</li>
                    </ul>
                    Solicita hoy tu proyecto social y ambiental. ¡Juntos damos color al futuro!
                </p>
            </div>
            <div class="col-12  text-center">
                <p class=" text-center">
                    <h2>Pintamos con propósito, embellecemos con conciencia</h2>
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