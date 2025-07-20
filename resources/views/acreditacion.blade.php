@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/footer/acreditacion.webp') }}');">

          </div>
        </div>
    </div>
</section>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12">
            <table class="table table-bordered table-striped organizational-table">
                <tbody>
                <tr>
                    <th class="bg-light text-center" colspan="2">ALWAYS PRO PAINTING LLC</td>
                </tr>
                <tr>
                    <th>Número estatal de registro en Florida:</th>
                    <td>L23000358430</td>
                </tr>
                <tr>
                    <th class="bg-light">Acreditación BBB:</th>
                    <td>ID Comercial 90440065 | <b>Calificación:</b> “A”</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <style>
            .organizational-table th {
            background-color: #f8f9fa;
            font-weight: bold;
            width: 40%;
            text-align: left;
            }
            .organizational-table td {
            background-color: #fff;
            width: 60%;
            }
            .organizational-table tr:nth-child(even) td {
            background-color: #f2f2f2;
            }
            .organizational-table tr:nth-child(even) th {
            background-color: #e9ecef;
            }
            .organizational-table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            }
        </style>

        <div class="col-12">
            <p>
                <b>Elegir Always Pro Painting es elegir tranquilidad certifi cada.</b> <br>
                En un mundo donde abundan las promesas y escasea la calidad, la confianza se convierte en el verdadero valor. Por eso, nos enorgullece anunciar que hemos sido oficialmente acreditados por el <b>calificación “A
”</b>.
        </div>
        <div class="col-12">
            <p>
                <b>Este sello representa:</b><br>
                Cuando usted interactúa con nuestro sitio web o servicios, podemos recopilar:
                <ul>
                    <li>Excelencia en la ejecución.
                    </li>
                    <li>Transparencia en cada interacción.
                    </li>
                    <li>Compromiso absoluto con nuestros clientes.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <b>¿Por qué esta acreditación BBB es importante?</b>
                <ul>
                    <li>Cumplimos con los más altos estándares de calidad.</li>
                    <li>Operamos con ética, precios justos y atención profesional.</li>
                    <li>Nos comprometemos al 100% con tu satisfacción en cada proyecto.</li>
                    <li>Puedes verifi car nuestra acreditación ofi cial aquí: <a href="https://www.bbb.org/us/fl/sarasota/profile/residential-painter/always-pro-painting-llc-0653-90440065" target="_blank">Ver Perfi l BBB de Always Pro Painting</a>
                    </li>
                </ul>
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <b>Servicios que refl ejan nuestra reputación:</b>
                Nuestro sitio utiliza <b>cookies</b> para ofrecer una mejor experiencia de navegación, analizar comportamientos de usuario y personalizar el contenido. Estas tecnologías pueden recopilar información como:
                <ul>
                    <li>Pintura interior y exterior de alto nivel.</li>
                    <li>Restauración profesional de drywall.</li>
                    <li>Lavado a presión (techos, pisos, paredes).</li>
                    <li>Recubrimientos epóxicos para garajes y superficies.</li>
                    <li>Sellado de adoquines y limpieza de canaletas.</li>
                </ul>
                
            </p>
        </div>

        <div class="col-12">
            <p>
                <b>Cada proyecto está impulsado por:</b>
                <ul>
                    <li>Pasión por los detalles.</li>
                    <li>Entrega puntual.</li>
                    <li>Trato humano, cercano y profesional.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <b>Zonas de cobertura con atención directa:</b>
                Sarasota • Bradenton y áreas circundantes
            </p>
        </div>

         <div class="col-12">
            <p>
                <b>Dirección Comercial:</b>
                360 Central Avenue, Suite 800 St. Petersburg, Florida 33701
            </p>
        </div>
        
         
        
         <div class="col-12">
            <p>
                <b>Contacto Directo:</b> <br>
                <b>Always Pro Painting LLC</b> <br>
                <i class="fa fa-envelope"></i> <a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a> <br>
                <i class="fa fa-phone"></i> <a href="https://wa.me/17274176867" target="_blank">(727) 417-6867</a> / <a href="https://wa.me/17274176753" target="_blank">(727) 417-6753</a>
            </p>
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