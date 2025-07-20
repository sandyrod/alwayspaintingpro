@extends('layouts.app')

@section('title', 'Página de Inicio')

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
          <h2>TERMINOS Y CONDICIONES</h2>
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
                <h3>1. Identifición de la Empresa</h3>
            Este sitio web es operado por <b>Always Pro Painting LLC,</b> una empresa de propiedad local con sede en Sarasota y Bradenton, Florida. Nos especializamos en servicios de pintura profesional, reparación de drywall, lavado a presión, restauración de gabinetes y renovación de espacios. Estos Términos y Condiciones regulan el uso del sitio web y los servicios ofrecidos por la empresa.
        </div>
        <div class="col-12">
            <p>
                <h3>2. Aceptación de los Términos</h3>
                Al acceder y utilizar este sitio web, usted acepta quedar vinculado por los presentes Términos y Condiciones. Si no está de acuerdo con alguna parte, le solicitamos no utilizar este sitio.
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>3. Uso del Sitio Web</h3>
               El contenido del sitio es de carácter informativo y está sujeto a cambios sin previo aviso.
El usuario se compromete a no utilizar este sitio con fi nes ilegales ni de forma que viole estos términos.
El uso no autorizado puede derivar en acciones legales bajo la legislación del estado de Florida.
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <h3>4. Solicitudes de Servicios y Cotizaciones</h3>
                Las solicitudes realizadas a través del sitio son no vinculantes y están sujetas a validación por parte de la empresa.
Nos reservamos el derecho de rechazar cualquier solicitud. Las cotizaciones tienen vigencia limitada y pueden modifi carse según el alcance del proyecto.
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>5. Condiciones de Pago</h3>
                Todos los servicios estarán sujetos a las condiciones pactadas por escrito. Puede requerirse un depósito para agendar trabajos.
El saldo deberá abonarse al fi nalizar los trabajos, salvo que se acuerde lo contrario por escrito.
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>6. Política de Cancelaciones y Reembolsos</h3>
                Las cancelaciones deben notifi carse con al menos 48 horas de antelación.
De no cumplirse este plazo, podrán aplicarse cargos.
Los reembolsos se regirán por lo estipulado en el contrato de servicio correspondiente.
            </p>
        </div>

         <div class="col-12">
            <p>
                <h3>7. Propiedad Intelectual</h3>
                Todo el contenido de este sitio web, incluyendo logotipos, textos, diseños e imágenes, es propiedad de <b>Always Pro Painting LLC</b> o de sus proveedores y está protegido por la legislación de derechos de autor de los EE.UU.
Está prohibida la reproducción o distribución sin autorización expresa y por escrito.
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>8. Limitación de Responsabilidad</h3>
                <b>Always Pro Painting LLC</b> no será responsable por:
                <ul>
                    <li>Daños indirectos, incidentales o consecuentes derivados del uso del sitio.</li>
                    <li>Errores u omisiones en el contenido.</li>
                    <li>Fallas técnicas o de seguridad fuera de nuestro control razonable.</li>
                </ul>
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>9. Enlaces a Terceros</h3>
                El sitio puede contener enlaces a páginas externas. No nos responsabilizamos por el contenido, privacidad ni políticas de dichos sitios.
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>10. Modificaciones</h3>
                <b>Always Pro Painting LLC</b> podrá actualizar estos términos sin previo aviso. El uso continuo del sitio implica aceptación de dichos cambios.
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>11. Ley Aplicable y Jurisdicción</h3> <br>
                Este documento se rige por las leyes del Estado de Florida. Toda disputa será sometida a los tribunales del Condado de Sarasota o Manatee.
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

        <div class="col-12">
            <p>
                <h3>12. Licencias y Derechos de Uso de Contenido Visual</h3> <br>
                Algunas imágenes utilizadas en este sitio web han sido obtenidas a través de
Canva
y están sujetas a sus respectivas licencias de contenido.
<b>Always Pro Painting LLC</b>
garantiza que todo el material visual cuenta con licencias comerciales válidas conforme a las políticas de uso de Canva.
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