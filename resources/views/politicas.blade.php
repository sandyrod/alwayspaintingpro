@extends('layouts.app')

@section('title', 'Página de Inicio')

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
          <h2>POLÍTICA DE PRIVACIDAD</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
            <table class="table table-bordered table-striped organizational-table">
                <tbody>
                <tr>
                    <th class="bg-light">Empresa</th>
                    <td>ALWAYS PRO PAINTING LLC</td>
                </tr>
                <tr>
                    <th>Fecha de vigencia</th>
                    <td>26 de julio de 2025</td>
                </tr>
                <tr>
                    <th class="bg-light">Última revisión</th>
                    <td>26 de julio de 2025</td>
                </tr>
                <tr>
                    <th>Próxima revisión prevista</th>
                    <td>julio de 2026</td>
                </tr>
                <tr>
                    <th class="bg-light">Número de registro estatal</th>
                    <td>L23000358430</td>
                </tr>
                <tr>
                    <th>Ubicación</th>
                    <td>Sarasota y Bradenton, Florida</td>
                </tr>
                <tr>
                    <th class="bg-light">Identificación comercial BBB</th>
                    <td>90440065</td>
                </tr>
                <tr>
                    <th>Calificación BBB</th>
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
                <h3>1. Compromiso con la Privacidad</h3>
            En <b>Always Pro Painting LLC,</b> valoramos su privacidad y estamos comprometidos con la protección de su información personal. Esta política describe cómo recopilamos, usamos, compartimos y protegemos sus datos conforme a la <b>Florida Information Protection Act (FIPA)</b>, la legislación federal de los EE.UU. y las recomendaciones de la <b>Federal Trade Commission (FTC)</b>.
        </div>
        <div class="col-12">
            <p>
                <h3>2. Información que Recopilamos</h3>
                Cuando usted interactúa con nuestro sitio web o servicios, podemos recopilar:
                <ul>
                    <li><strong>Datos de contacto: </strong>
                        nombre, dirección, correo electrónico, número de teléfono.
                    </li>
                    <li><strong>Datos técnicos: </strong>
                        dirección IP, tipo de navegador, sistema operativo, geolocalización aproximada, duración de la visita.
                    </li>
                    <li><strong>Datos de navegación e interacción: </strong>
                        páginas visitadas, formularios completados, clics, acciones.
                    </li>
                    <li><b>Herramientas de análisis y cookies: </b> tecnologías como Google Analytics, Facebook Pixel, cookies funcionales y de rendimiento.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>3. ¿Cómo Usamos su Información?</h3>
                Utilizamos sus datos para:
                <ul>
                    <li>Atender sus consultas, solicitudes o presupuestos.</li>
                    <li>Coordinar servicios y contacto comercial.</li>
                    <li>Mejorar la experiencia en el sitio web mediante análisis estadísticos.</li>
                    <li>Enviar información promocional solo si usted ha dado su consentimiento.</li>
                    <li>Cumplir con obligaciones legales o de seguridad.</li>
                </ul>
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <h3>4. Uso de Cookies y Tecnologías Similares</h3>
                Nuestro sitio utiliza <b>cookies</b> para ofrecer una mejor experiencia de navegación, analizar comportamientos de usuario y personalizar el contenido. Estas tecnologías pueden recopilar información como:
                <ul>
                    <li>Identificadores únicos de dispositivo o navegador..</li>
                    <li>Páginas visitadas, duración de navegación y patrones de uso.</li>
                    <li>Preferencias de idioma y confi guración de pantalla.</li>
                </ul>
                Herramientas utilizadas:
                <ul>
                    <li>Google Analytics</li>
                    <li>Facebook/Meta Pixel</li>
                    <li>Formularios de contacto</li>
                    <li>Cookies de personalización y rendimiento</li>
                </ul>
                Gestión de cookies: <br>
                Al ingresar al sitio, se mostrará un aviso de consentimiento para cookies. Usted puede aceptarlas, rechazarlas o gestionarlas desde su navegador o confi guración del banner. <br>
                <b> Nota:</b> Algunas cookies son esenciales para el funcionamiento técnico del sitio y no pueden ser desactivadas sin afectar su funcionalidad.
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>5. Compartición de Información</h3>
                No vendemos ni alquilamos sus datos personales. Solo compartimos información con:
                <ul>
                    <li>Proveedores necesarios para la operación del sitio (alojamiento web, sistemas analíticos).</li>
                    <li>Autoridades competentes cuando sea legalmente requerido.</li>
                    <li>Bajo estrictos acuerdos de confi dencialidad.</li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>6. Seguridad de la Información</h3>
                Implementamos medidas técnicas y administrativas para proteger su información. Aunque ningún sistema es completamente infalible, hacemos todos los esfuerzos razonables para garantizar su seguridad.
            </p>
        </div>

         <div class="col-12">
            <p>
                <h3>7. Sus Derechos</h3>
                Usted tiene derecho a:
                <ul>
                    <li>Acceder a los datos que hemos recopilado.</li>
                    <li>Solicitar su corrección o eliminación.</li>
                    <li>Retirar el consentimiento previamente otorgado.</li>
                </ul>
                <i class="fa fa-envelope"></i> Para ejercer sus derechos, escríbanos a: <a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>8. Retención de Datos</h3>
                Conservamos la información personal únicamente el tiempo necesario para los fi nes establecidos o conforme a la legislación aplicable.
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>9. Información de Menores</h3>
                No recopilamos información de menores de 13 años de forma intencional. Si cree que hemos recibido datos de un menor, por favor contáctenos de inmediato.
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>10. Cambios a Esta Política</h3>
                Podemos actualizar esta Política de Privacidad en cualquier momento. La versión más reciente estará disponible en nuestro sitio web con su respectiva fecha de actualización.
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>11. Información de Contacto</h3> <br>
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
        console.log('Página de inicio cargada');
    </script>
@endpush