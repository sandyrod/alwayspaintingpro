@extends('layouts.app')

@section('title', 'Términos y Condiciones')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/footer/terminos.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="section-title">
          <h2 data-key="terms_and_conditions">TERMINOS Y CONDICIONES</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
            <table class="table table-bordered table-striped organizational-table">
                <tbody>
                <tr>
                    <th class="bg-light" data-key="company">Empresa</th>
                    <td>ALWAYS PRO PAINTING LLC</td>
                </tr>
                <tr>
                    <th data-key="effective_date">Fecha de vigencia</th>
                    <td>26 de julio de 2025</td>
                </tr>
                <tr>
                    <th class="bg-light" data-key="last_revision">Última revisión</th>
                    <td>26 de julio de 2025</td>
                </tr>
                <tr>
                    <th data-key="next_revision">Próxima revisión prevista</th>
                    <td>julio de 2026</td>
                </tr>
                <tr>
                    <th class="bg-light" data-key="state_registration_number">Número de registro estatal</th>
                    <td>L23000358430</td>
                </tr>
                <tr>
                    <th data-key="location">Ubicación</th>
                    <td>Sarasota y Bradenton, Florida</td>
                </tr>
                <tr>
                    <th class="bg-light" data-key="bbb_business_id">Identificación comercial BBB</th>
                    <td>90440065</td>
                </tr>
                <tr>
                    <th data-key="bbb_rating">Calificación BBB</th>
                    <td>"A"</td>
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
                <h3 data-key="company_identification">1. Identificación de la Empresa</h3>
            <span data-key="company_description">Este sitio web es operado por <b>Always Pro Painting LLC,</b> una empresa de propiedad local con sede en Sarasota y Bradenton, Florida. Nos especializamos en servicios de pintura profesional, reparación de drywall, lavado a presión, restauración de gabinetes y renovación de espacios. Estos Términos y Condiciones regulan el uso del sitio web y los servicios ofrecidos por la empresa.</span>
        </div>
        <div class="col-12">
            <p>
                <h3 data-key="terms_acceptance">2. Aceptación de los Términos</h3>
                <span data-key="terms_acceptance_text">Al acceder y utilizar este sitio web, usted acepta quedar vinculado por los presentes Términos y Condiciones. Si no está de acuerdo con alguna parte, le solicitamos no utilizar este sitio.</span>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="website_usage">3. Uso del Sitio Web</h3>
               <span data-key="website_usage_text">El contenido del sitio es de carácter informativo y está sujeto a cambios sin previo aviso.
El usuario se compromete a no utilizar este sitio con fines ilegales ni de forma que viole estos términos.
El uso no autorizado puede derivar en acciones legales bajo la legislación del estado de Florida.</span>
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <h3 data-key="service_requests">4. Solicitudes de Servicios y Cotizaciones</h3>
                <span data-key="service_requests_text">Las solicitudes realizadas a través del sitio son no vinculantes y están sujetas a validación por parte de la empresa.
Nos reservamos el derecho de rechazar cualquier solicitud. Las cotizaciones tienen vigencia limitada y pueden modificarse según el alcance del proyecto.</span>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="payment_conditions">5. Condiciones de Pago</h3>
                <span data-key="payment_conditions_text">Todos los servicios estarán sujetos a las condiciones pactadas por escrito. Puede requerirse un depósito para agendar trabajos.
El saldo deberá abonarse al finalizar los trabajos, salvo que se acuerde lo contrario por escrito.</span>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="cancellation_policy">6. Política de Cancelaciones y Reembolsos</h3>
                <span data-key="cancellation_policy_text">Las cancelaciones deben notificarse con al menos 48 horas de antelación.
De no cumplirse este plazo, podrán aplicarse cargos.
Los reembolsos se regirán por lo estipulado en el contrato de servicio correspondiente.</span>
            </p>
        </div>

         <div class="col-12">
            <p>
                <h3 data-key="intellectual_property">7. Propiedad Intelectual</h3>
                <span data-key="intellectual_property_text">Todo el contenido de este sitio web, incluyendo logotipos, textos, diseños e imágenes, es propiedad de <b>Always Pro Painting LLC</b> o de sus proveedores y está protegido por la legislación de derechos de autor de los EE.UU.
Está prohibida la reproducción o distribución sin autorización expresa y por escrito.</span>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3 data-key="liability_limitation">8. Limitación de Responsabilidad</h3>
                <span data-key="liability_limitation_text"><b>Always Pro Painting LLC</b> no será responsable por:</span>
                <ul>
                    <li data-key="liability_item1">Daños indirectos, incidentales o consecuentes derivados del uso del sitio.</li>
                    <li data-key="liability_item2">Errores u omisiones en el contenido.</li>
                    <li data-key="liability_item3">Fallas técnicas o de seguridad fuera de nuestro control razonable.</li>
                </ul>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3 data-key="third_party_links">9. Enlaces a Terceros</h3>
                <span data-key="third_party_links_text">El sitio puede contener enlaces a páginas externas. No nos responsabilizamos por el contenido, privacidad ni políticas de dichos sitios.</span>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3 data-key="modifications">10. Modificaciones</h3>
                <span data-key="modifications_text"><b>Always Pro Painting LLC</b> podrá actualizar estos términos sin previo aviso. El uso continuo del sitio implica aceptación de dichos cambios.</span>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3 data-key="applicable_law">11. Ley Aplicable y Jurisdicción</h3> <br>
                <span data-key="applicable_law_text">Este documento se rige por las leyes del Estado de Florida. Toda disputa será sometida a los tribunales del Condado de Sarasota o Manatee.</span>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="contact_information">11. Información de Contacto</h3> <br>
                <b>Always Pro Painting LLC</b> <br>
                <i class="fa fa-envelope"></i> <a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a> <br>
                <i class="fa fa-phone"></i> <a href="https://wa.me/17274176867" target="_blank">(727) 417-6867</a> / <a href="https://wa.me/17274176753" target="_blank">(727) 417-6753</a> <br>
                <i class="fa fa-map-marker"></i> <a href="https://www.google.com/maps?q=360+Central+Avenue,+Suite+800,+St.+Petersburg,+Florida+33701" target="_blank">360 Central Avenue, Suite 800, St. Petersburg, Florida 33701</a>
            </p>
        </div>        

        <div class="col-12">
            <p>
                <h3 data-key="visual_content_licenses">12. Licencias y Derechos de Uso de Contenido Visual</h3> <br>
                <span data-key="visual_content_licenses_text">Algunas imágenes utilizadas en este sitio web han sido obtenidas a través de
Canva
y están sujetas a sus respectivas licencias de contenido.
<b>Always Pro Painting LLC</b>
garantiza que todo el material visual cuenta con licencias comerciales válidas conforme a las políticas de uso de Canva.</span>
            </p>
        </div>
        
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de términos y condiciones cargada');
    </script>
@endpush