@extends('layouts.app')

@section('title', 'Servicios')

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
<div class="container py-5">
  <div class="row">
    <div class="col-md-3 mb-4">
      <div class="card h-100 d-flex flex-column border-0 shadow-sm servicio-card">
        <img src="{{ asset('storage/img/drywall.webp') }}" class="card-img-top" alt="Drywall">
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 class="card-title" data-key="drywall_title">Drywall</h5>
          <p class="card-text" data-key="drywall_description">Acabados de drywall perfectos, duraderos y confiables.</p>
          <div class="mt-auto">
            <a href="{{ route('drywall') }}" class="btn btn-primary w-100" data-key="read_more">Ver más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card h-100 d-flex flex-column border-0 shadow-sm servicio-card">
        <img src="{{ asset('storage/img/pinturainteriorexterior.webp') }}" class="card-img-top" alt="Pintura Interior y Exterior">
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 class="card-title" data-key="painting_title">Pintura Interior & Exterior</h5>
          <p class="card-text" data-key="painting_description">Color, precisión y estilo para tu hogar y oficina.</p>
          <div class="mt-auto">
            <a href="{{ route('pintura') }}" class="btn btn-primary w-100" data-key="read_more">Ver más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card h-100 d-flex flex-column border-0 shadow-sm servicio-card">
        <img src="{{ asset('storage/img/lavadoapresion.webp') }}" class="card-img-top" alt="Lavado a presión">
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 class="card-title" data-key="pressure_washing_title">Lavado a presión</h5>
          <p class="card-text" data-key="pressure_washing_description">Limpio y como nuevo, sin químicos agresivos.</p>
          <div class="mt-auto">
            <a href="{{ route('lavado') }}" class="btn btn-primary w-100" data-key="read_more">Ver más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card h-100 d-flex flex-column border-0 shadow-sm servicio-card">
        <img src="{{ asset('storage/img/vinculacion.webp') }}" class="card-img-top" alt="Vinculación Comunitaria">
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 class="card-title" data-key="community_title">Vinculación Comunitaria</h5>
          <p class="card-text" data-key="community_description">Renovamos espacios públicos con criterios ecológicos.</p>
          <div class="mt-auto">
            <a href="{{ route('vinculacion') }}" class="btn btn-primary w-100" data-key="read_more">Ver más</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .servicio-card {
    transition: transform 0.3s cubic-bezier(.4,2,.3,1), box-shadow 0.3s cubic-bezier(.4,2,.3,1);
    box-shadow: 0 2px 10px rgba(68,136,179,0.08);
    position: relative;
    overflow: hidden;
  }
  .servicio-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, rgba(68,136,179,0.08) 0%, rgba(68,136,179,0.18) 100%);
    opacity: 0;
    transition: opacity 0.3s cubic-bezier(.4,2,.3,1);
    z-index: 1;
    pointer-events: none;
  }
  .servicio-card:hover, .servicio-card:focus-within {
    transform: translateY(-8px) scale(1.03) rotate(-1deg);
    box-shadow: 0 8px 32px rgba(68,136,179,0.18), 0 1.5px 8px rgba(0,0,0,0.08);
    z-index: 2;
  }
  .servicio-card:hover::before, .servicio-card:focus-within::before {
    opacity: 1;
  }
  .servicio-card:hover .card-img-top, .servicio-card:focus-within .card-img-top {
    filter: brightness(1.08) saturate(1.1);
    transition: filter 0.3s cubic-bezier(.4,2,.3,1);
  }
</style>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de inicio cargada');
    </script>
@endpush