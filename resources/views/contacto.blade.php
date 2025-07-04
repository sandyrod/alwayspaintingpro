@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/contacto_1.png') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card rounded-lg overflow-hidden" style="width: 600px; height: 300px;">
                    <div class="row h-100">
                        <div class="col-md-6 p-0 h-100">
                            <img src="{{ asset('storage/img/ubicacion.png') }}" class="h-100 w-100" style="object-fit: cover;">
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                            <h3 class="m-0">info@alwayspropainting.com</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card rounded-lg overflow-hidden" style="width: 600px; height: 300px;">
                    <div class="row h-100">
                        <div class="col-md-6 p-0 h-100">
                            <img src="{{ asset('storage/img/email.png') }}" class="h-100 w-100" style="object-fit: cover;">
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                            <h3 class="m-0">Nuestro horario es de lunes a viernes, de 8am a 5pm. Sabados y Domingos con cita previa</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card rounded-lg overflow-hidden" style="width: 600px; height: 300px;">
                    <div class="row h-100">
                        <div class="col-md-6 p-0 h-100">
                            <img src="{{ asset('storage/img/email.png') }}" class="h-100 w-100" style="object-fit: cover;">
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                            <h3 class="m-0">info@alwayspropainting.com</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card rounded-lg overflow-hidden" style="width: 600px; height: 300px;">
                    <div class="row h-100">
                        <div class="col-md-6 p-0 h-100">
                            <img src="{{ asset('storage/img/whatsappcard.png') }}" class="h-100 w-100" style="object-fit: cover;">
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                            <h3 class="m-0">
                                <a href="https://wa.me/17274176867" style="color:#fff;">(727) 417-6867</a> <br>
                                <a href="https://wa.me/17274176867" style="color:#fff;">(727) 417-6753</a>
                            </h3>
                        </div>
                    </div>
                </div>
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