@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section>
<style>
        .about-lists .content-item img {
            transition: transform 0.4s ease-in-out;
            transform-origin: center center;
        }
        
        .about-lists .content-item img:hover {
            transform: scale(1.03);
        }
        
        .video-box {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 20px;
        }
        
        .video-thumbnail-container {
            max-width: 100%;
            height: auto;
        }
        
        .custom-button {
            display: inline-flex;
            align-items: center;
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .custom-button .button-text {
            margin-right: 15px;
        }
        
        .custom-button .button-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #fff;
            color: #000;
            font-size: 14px;
        }
        
        .custom-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .features-list {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }
        
        .features-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        
        .features-list li:last-child {
            border-bottom: none;
        }
        
        .features-list i {
            margin-right: 10px;
            font-size: 1.2em;
            color: #4488b3;
        }
        
        
        .video-thumbnail-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }
        
        .video-thumbnail-container img {
            transition: transform 0.3s ease;
        }
        
        .video-thumbnail-container:hover img {
            transform: scale(1.05);
        }
        
        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            opacity: 0.8;
        }
        
        .play-btn:hover {
            opacity: 1;
            background: rgba(0, 0, 0, 0.9);
        }
        
        .play-btn i {
            font-size: 24px;
            color: #fff;
        }
        
        #videoModal {
            text-align: center;
        }
        
        #videoModal .modal-content {
            border-radius: 10px;
            padding: 20px;
        }
        
        #videoModal .modal-body {
            padding: 0;
        }
        
        #videoModal .close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
            font-size: 24px;
        }
        
        #videoModal .close:hover {
            color: #ddd;
        }
        
        #videoModal video {
            border-radius: 10px;
        }

        .about {
            padding: 20px;
        }
    </style>
<div class="row no-gutters container about">
          <div class="col-lg-6 video-box">
            <!-- Thumbnail Image -->
            <div class="video-thumbnail-container">
                <img src="{{ asset('storage/img/about.jpeg') }}" class="img-fluid video-thumbnail" alt="">
                <a href="#" class="play-btn mb-4" data-video="{{ asset('storage/videos/about.mp4') }}" data-toggle="modal" data-target="#videoModal">
                    <i class="icofont-play-alt-2"></i>
                </a>
            </div>

            <!-- Video Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <video class="w-100" controls playsinline>
                                <source src="{{ asset('storage/videos/about.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title" style="padding-bottom: 0px;">
              <h2>¿Quienes Somos?</h2>
              <p>En Always Pro Painting, transformamos espacios desde 2022 con servicios profesionales de pintura, 
                reparación de drywall, texturizado y lavado a presión. Servimos con confiabilidad en Sarasota, Bradenton y áreas 
                circundantes, garantizando acabados duraderos, materiales de primera calidad, compromiso ambiental y atención experta.</p>
            </div>

            <div class="icon-box">
              <h4 class="title"></h4>
              <div class="row">
                <div class="col-md-6">
                  <ul class="features-list">
                    <li><i class="fas fa-certificate"></i> Certificados BBB</li>
                    <li><i class="fas fa-check-circle"></i> Calidad garantizada</li>
                    <li><i class="fas fa-users"></i> Equipo profesional</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="features-list">
                    <li><i class="fas fa-clock"></i> +2 años de experiencia</li>
                    <li><i class="fas fa-clock"></i> Puntualidad asegurada</li>
                  </ul>
                </div>
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