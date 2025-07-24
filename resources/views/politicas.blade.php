@extends('layouts.app')

@section('title', 'Política de Privacidad')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/footer/politicas.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="section-title">
          <h2 data-key="privacy_policy">POLÍTICA DE PRIVACIDAD</h2>
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
                <h3 data-key="privacy_commitment">1. Compromiso con la Privacidad</h3>
            <span data-key="privacy_commitment_text">En <b>Always Pro Painting LLC,</b> valoramos su privacidad y estamos comprometidos con la protección de su información personal. Esta política describe cómo recopilamos, usamos, compartimos y protegemos sus datos conforme a la <b>Florida Information Protection Act (FIPA)</b>, la legislación federal de los EE.UU. y las recomendaciones de la <b>Federal Trade Commission (FTC)</b>.</span>
        </div>
        <div class="col-12">
            <p>
                <h3 data-key="information_collected">2. Información que Recopilamos</h3>
                <span data-key="information_collected_text">Cuando usted interactúa con nuestro sitio web o servicios, podemos recopilar:</span>
                <ul>
                    <li data-key="contact_data"><strong>Datos de contacto: </strong>
                        nombre, dirección, correo electrónico, número de teléfono.
                    </li>
                    <li data-key="technical_data"><strong>Datos técnicos: </strong>
                        dirección IP, tipo de navegador, sistema operativo, geolocalización aproximada, duración de la visita.
                    </li>
                    <li data-key="navigation_data"><strong>Datos de navegación e interacción: </strong>
                        páginas visitadas, formularios completados, clics, acciones.
                    </li>
                    <li data-key="analytics_tools"><b>Herramientas de análisis y cookies: </b> tecnologías como Google Analytics, Facebook Pixel, cookies funcionales y de rendimiento.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="information_usage">3. ¿Cómo Usamos su Información?</h3>
                <span data-key="information_usage_text">Utilizamos sus datos para:</span>
                <ul>
                    <li data-key="usage_inquiries">Atender sus consultas, solicitudes o presupuestos.</li>
                    <li data-key="usage_services">Coordinar servicios y contacto comercial.</li>
                    <li data-key="usage_experience">Mejorar la experiencia en el sitio web mediante análisis estadísticos.</li>
                    <li data-key="usage_promotional">Enviar información promocional solo si usted ha dado su consentimiento.</li>
                    <li data-key="usage_legal">Cumplir con obligaciones legales o de seguridad.</li>
                </ul>
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <h3 data-key="cookies_usage">4. Uso de Cookies y Tecnologías Similares</h3>
                <span data-key="cookies_usage_text">Nuestro sitio utiliza <b>cookies</b> para ofrecer una mejor experiencia de navegación, analizar comportamientos de usuario y personalizar el contenido. Estas tecnologías pueden recopilar información como:</span>
                <ul>
                    <li data-key="cookies_identifiers">Identificadores únicos de dispositivo o navegador.</li>
                    <li data-key="cookies_pages">Páginas visitadas, duración de navegación y patrones de uso.</li>
                    <li data-key="cookies_preferences">Preferencias de idioma y configuración de pantalla.</li>
                </ul>
                <span data-key="tools_used">Herramientas utilizadas:</span>
                <ul>
                    <li data-key="tool_analytics">Google Analytics</li>
                    <li data-key="tool_pixel">Facebook/Meta Pixel</li>
                    <li data-key="tool_forms">Formularios de contacto</li>
                    <li data-key="tool_cookies">Cookies de personalización y rendimiento</li>
                </ul>
                <span data-key="cookies_management">Gestión de cookies:</span> <br>
                <span data-key="cookies_consent">Al ingresar al sitio, se mostrará un aviso de consentimiento para cookies. Usted puede aceptarlas, rechazarlas o gestionarlas desde su navegador o configuración del banner.</span> <br>
                <span data-key="cookies_note"><b>Nota:</b> Algunas cookies son esenciales para el funcionamiento técnico del sitio y no pueden ser desactivadas sin afectar su funcionalidad.</span>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="information_sharing">5. Compartición de Información</h3>
                <span data-key="information_sharing_text">No vendemos ni alquilamos sus datos personales. Solo compartimos información con:</span>
                <ul>
                    <li data-key="sharing_providers">Proveedores necesarios para la operación del sitio (alojamiento web, sistemas analíticos).</li>
                    <li data-key="sharing_authorities">Autoridades competentes cuando sea legalmente requerido.</li>
                    <li data-key="sharing_agreements">Bajo estrictos acuerdos de confidencialidad.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="information_security">6. Seguridad de la Información</h3>
                <span data-key="information_security_text">Implementamos medidas técnicas y administrativas para proteger su información. Aunque ningún sistema es completamente infalible, hacemos todos los esfuerzos razonables para garantizar su seguridad.</span>
            </p>
        </div>

         <div class="col-12">
            <p>
                <h3 data-key="your_rights">7. Sus Derechos</h3>
                <span data-key="your_rights_text">Usted tiene derecho a:</span>
                <ul>
                    <li data-key="rights_access">Acceder a los datos que hemos recopilado.</li>
                    <li data-key="rights_correction">Solicitar su corrección o eliminación.</li>
                    <li data-key="rights_withdraw">Retirar el consentimiento previamente otorgado.</li>
                </ul>
                <span data-key="rights_contact"><i class="fa fa-envelope"></i> Para ejercer sus derechos, escríbanos a: <a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a></span>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3 data-key="data_retention">8. Retención de Datos</h3>
                <span data-key="data_retention_text">Conservamos la información personal únicamente el tiempo necesario para los fines establecidos o conforme a la legislación aplicable.</span>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3 data-key="minors_information">9. Información de Menores</h3>
                <span data-key="minors_information_text">No recopilamos información de menores de 13 años de forma intencional. Si cree que hemos recibido datos de un menor, por favor contáctenos de inmediato.</span>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3 data-key="policy_changes">10. Cambios a Esta Política</h3>
                <span data-key="policy_changes_text">Podemos actualizar esta Política de Privacidad en cualquier momento. La versión más reciente estará disponible en nuestro sitio web con su respectiva fecha de actualización.</span>
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
        
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de política de privacidad cargada');
    </script>
@endpush