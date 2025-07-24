@extends('layouts.app')

@section('title', 'Acreditación')

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
                    <th data-key="florida_registration">Número estatal de registro en Florida:</th>
                    <td>L23000358430</td>
                </tr>
                <tr>
                    <th class="bg-light" data-key="bbb_accreditation">Acreditación BBB:</th>
                    <td><span data-key="business_id">ID Comercial</span> 90440065 | <b data-key="rating">Calificación:</b> "A"</td>
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
                <b data-key="certified_peace">Elegir Always Pro Painting es elegir tranquilidad certificada.</b> <br>
                <span data-key="trust_value">En un mundo donde abundan las promesas y escasea la calidad, la confianza se convierte en el verdadero valor. Por eso, nos enorgullece anunciar que hemos sido oficialmente acreditados por el</span> <b data-key="a_rating">calificación "A"</b>.
        </div>
        <div class="col-12">
            <p>
                <b data-key="seal_represents">Este sello representa:</b><br>
                <span data-key="when_interact">Cuando usted interactúa con nuestro sitio web o servicios, podemos recopilar:</span>
                <ul>
                    <li data-key="excellence_execution">Excelencia en la ejecución.
                    </li>
                    <li data-key="transparency_interaction">Transparencia en cada interacción.
                    </li>
                    <li data-key="absolute_commitment">Compromiso absoluto con nuestros clientes.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <b data-key="why_important">¿Por qué esta acreditación BBB es importante?</b>
                <ul>
                    <li data-key="highest_standards">Cumplimos con los más altos estándares de calidad.</li>
                    <li data-key="ethics_prices">Operamos con ética, precios justos y atención profesional.</li>
                    <li data-key="committed_satisfaction">Nos comprometemos al 100% con tu satisfacción en cada proyecto.</li>
                    <li data-key="verify_accreditation">Puedes verificar nuestra acreditación oficial aquí: <a href="https://www.bbb.org/us/fl/sarasota/profile/residential-painter/always-pro-painting-llc-0653-90440065" target="_blank" data-key="view_profile">Ver Perfil BBB de Always Pro Painting</a>
                    </li>
                </ul>
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <b data-key="services_reputation">Servicios que reflejan nuestra reputación:</b>
                <span data-key="site_cookies">Nuestro sitio utiliza <b>cookies</b> para ofrecer una mejor experiencia de navegación, analizar comportamientos de usuario y personalizar el contenido. Estas tecnologías pueden recopilar información como:</span>
                <ul>
                    <li data-key="interior_exterior">Pintura interior y exterior de alto nivel.</li>
                    <li data-key="drywall_restoration">Restauración profesional de drywall.</li>
                    <li data-key="pressure_washing">Lavado a presión (techos, pisos, paredes).</li>
                    <li data-key="epoxy_coatings">Recubrimientos epóxicos para garajes y superficies.</li>
                    <li data-key="paver_sealing">Sellado de adoquines y limpieza de canaletas.</li>
                </ul>
                
            </p>
        </div>

        <div class="col-12">
            <p>
                <b data-key="project_driven">Cada proyecto está impulsado por:</b>
                <ul>
                    <li data-key="passion_details">Pasión por los detalles.</li>
                    <li data-key="punctual_delivery">Entrega puntual.</li>
                    <li data-key="professional_treatment">Trato humano, cercano y profesional.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <b data-key="coverage_areas">Zonas de cobertura con atención directa:</b>
                <span data-key="sarasota_bradenton">Sarasota • Bradenton y áreas circundantes</span>
            </p>
        </div>

         <div class="col-12">
            <p>
                <b data-key="business_address">Dirección Comercial:</b>
                <span data-key="address_content">360 Central Avenue, Suite 800 St. Petersburg, Florida 33701</span>
            </p>
        </div>
        
         
        
         <div class="col-12">
            <p>
                <b data-key="direct_contact">Contacto Directo:</b> <br>
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
        console.log('Página de acreditación cargada');
    </script>
@endpush