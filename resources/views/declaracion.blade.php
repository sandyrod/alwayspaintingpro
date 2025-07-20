@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/footer/declaracion.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="section-title">
          <h2>DECLARACIÓN DE ACCESIBILIDAD</h2>
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
            En <b>Always Pro Painting LLC,</b> estamos plenamente comprometidos con garantizar que nuestro sitio web sea accesible para todas las personas, incluidas aquellas con discapacidades. Nuestros esfuerzos están orientados a ofrecer una experiencia digital inclusiva, sin barreras, y conforme a los estándares actuales de accesibilidad y las normativas legales aplicables en los Estados Unidos y el estado de Florida.</b>.
        </div>
        <div class="col-12">
            <p>
                <h3>Estándares de cumplimiento</h3>
                Nos esforzamos por cumplir con las siguientes leyes y pautas:
                <ul>
                    <li>Ley de Estadounidenses con Discapacidades (ADA), Título III.
                    </li>
                    <li>Sección 508 de la Ley de Rehabilitación de 1973.
                    </li>
                    <li>Pautas de Accesibilidad para el Contenido Web (WCAG) 2.1 - Nivel AA.
                    </li>
                    <li>Políticas del estado de Florida sobre accesibilidad digital y acceso público igualitario.</li>
                </ul>
                Nuestro objetivo es que este sitio sea funcional y comprensible para personas con discapacidades visuales, auditivas, físicas o cognitivas, incluyendo aquellas que utilizan tecnologías de asistencia como lectores de pantalla, magnifi cadores, software de reconocimiento de voz o dispositivos de entrada alternativos.
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>Funciones de accesibilidad implementadas</h3>
                Para mejorar la experiencia de todos los usuarios, nuestro sitio incluye:
                <ul>
                    <li>Compatibilidad con navegación por teclado.</li>
                    <li>Etiquetas ALT descriptivas en imágenes esenciales.</li>
                    <li>Contrastes adecuados entre texto y fondo para mejor lectura.</li>
                    <li>Estructura de contenido lógica y clara mediante HTML semántico.</li>
                    <li>Etiquetas ARIA aplicadas cuando es necesario.</li>
                    <li>Diseño adaptable y consistente en todos los dispositivos.</li>
                    <li>Compatibilidad con funciones de zoom del navegador.</li>
                </ul>
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <h3>Limitaciones conocidas</h3>
                Aunque trabajamos activamente para lograr un alto nivel de accesibilidad, reconocemos que algunos elementos aún pueden presentar limitaciones:
                <ul>
                    <li>Algunos documentos en PDF podrían no cumplir completamente con WCAG 2.1</li>
                    <li>Imágenes decorativas pueden no incluir descripciones ALT (aunque están marcadas como no esenciales)</li>
                    <li>Herramientas o contenidos de terceros (como mapas embebidos o plugins) podrían no estar completamente optimizados.</li>
                </ul>
                Seguimos trabajando en estas áreas y valoramos cualquier sugerencia o informe de accesibilidad por parte de los usuarios.
            </p>
        </div>
        
         <div class="col-12">
            <p>
                <h3>Comentarios y asistencia</h3> <br>
                Si tiene dificultades para acceder a alguna sección del sitio web o necesita asistencia personalizada, puede contactarnos a través de los siguientes canales: <br>
                <i class="fa fa-envelope"></i> <a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a> <br>
                <i class="fa fa-phone"></i> <a href="https://wa.me/17274176867" target="_blank">(727) 417-6867</a> / <a href="https://wa.me/17274176753" target="_blank">(727) 417-6753</a> <br>
                <i class="fa fa-map-marker"></i> <a href="https://www.google.com/maps?q=360+Central+Avenue,+Suite+800,+St.+Petersburg,+Florida+33701" target="_blank">360 Central Avenue, Suite 800, St. Petersburg, Florida 33701</a>
                <br>
                Nos comprometemos a responderle dentro de un plazo máximo de cinco (5) días hábiles.
            </p>
        </div>      
      
        <div class="col-12">
            <p>
                <h3>Compromiso de mejora continua</h3>
                En <b>Always Pro Painting LLC</b>, entendemos que la accesibilidad digital es una parte esencial del servicio de calidad que ofrecemos a nuestras comunidades en Sarasota, Bradenton y alrededores. Por ello, revisamos y actualizamos nuestras prácticas periódicamente para mantenernos alineados con la ley, la tecnología y las mejores prácticas web.
            </p>
        </div>
  
        <div class="col-12">
            <p>
                <h3>Aviso legal</h3>
                Esta Declaración de Accesibilidad se publica en cumplimiento del Título III de la ADA y otras leyes de accesibilidad vigentes en los Estados Unidos y el estado de Florida. Aunque trabajamos diligentemente para mantener este sitio web accesible, la implementación de herramientas o tecnologías de accesibilidad no garantiza que todo el contenido esté libre de barreras. Invitamos a los usuarios a contactarnos si encuentran alguna difi cultad específi ca.
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