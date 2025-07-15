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
    </style>
<section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/drywall.webp') }}'); padding:4px;">
            <div class="content-box">
              <h3>Drywall</h3>
              <p>Acabados de drywall perfectos, duraderos y confiables
              </p>
              <div class="hover-text"><a href="{{ route('drywall') }}">No lo sueñes, ¡vívelo! 
              <br>
              haz clic y obsérvalo</a>
              <br><br><a href="{{ route('drywall') }}" class="custom-button">
                  <span class="button-text">Conquista</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/pinturainteriorexterior.webp') }}');">
            <div class="content-box">
              <h3>Pintura<br>Exterior & Interior</h3>
              <p>Color, precisión y estilo para tu hogar y oficina
              </p>
              <div class="hover-text"><a href="{{ route('pintura') }}">No lo imagines, ¡míralo con un clic!
              </a>
              <br><br><a href="{{ route('pintura') }}" class="custom-button">
                  <span class="button-text">Inspírate</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/lavadoapresion.webp') }}');">
            <div class="content-box">
              <h3>Lavado a presión</h3>
              <p>Limpio y como nuevo, sin químicos agresivos
              </p>
              <div class="hover-text"><a href="{{ route('lavado') }}">Los detalles importan, y nosotros los hacemos destacar: empieza con un clic
              </a>
              <br><br><a href="{{ route('lavado') }}" class="custom-button">
                  <span class="button-text">Sumérgete</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" style="background-image: url('{{ asset('storage/img/vinculacion.webp') }}');">
            <div class="content-box">
              <h3>Vinculación<br>Comunitaria</h3>
              <p>Renovamos espacios públicos con criterios ecológicos
              </p>
              <div class="hover-text">
                <a href="{{ route('vinculacion') }}">Haz clic y conoce como sumamos color, vida y sostenibilidad a Sarasota y Bradenton
                </a>
                <br><br><a href="{{ route('vinculacion') }}" class="custom-button">
                  <span class="button-text">Explora</span>
                  <span class="button-icon">
                    <i class="fas fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de inicio cargada');
    </script>
@endpush