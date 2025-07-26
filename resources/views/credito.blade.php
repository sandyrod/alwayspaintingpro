@extends('layouts.app')

@section('title', 'Créditos')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/footer/creditos.webp') }}');">

          </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="section-title">
          <h2 data-key="credits_licenses">CRÉDITOS Y LICENCIAS</h2>
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
                    <td data-key="dates_july">26 de julio de 2025</td>
                </tr>
                <tr>
                    <th class="bg-light" data-key="last_revision">Última revisión</th>
                    <td data-key="dates_july">26 de julio de 2025</td>
                </tr>
                <tr>
                    <th data-key="next_revision">Próxima revisión prevista</th>
                    <td data-key="dates_july_short">julio de 2026</td>
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
                <h3 data-key="site_ownership">1. Titularidad del sitio</h3>
            <span data-key="site_ownership_text">Este sitio web es propiedad de Always Pro Painting LLC, con sede en St. Petersburg, FL, y operación comercial verificada en Sarasota, Bradenton y áreas circundantes. El contenido se rige por las leyes del Estado de Florida y la legislación federal vigente.</span>
        </div>
        <div class="col-12">
            <p>
                <h3 data-key="visual_content_licenses">2. Licencias de contenido visual (imágenes, íconos, gráficos)</h3>
                <span data-key="visual_content_text">Este sitio web utiliza imágenes, íconos y elementos gráficos creados o descargados desde Canva. Dichos elementos están sujetos a las condiciones de uso establecidas por Canva para contenido gratuito.</span>
<span data-key="compliance_credits">En cumplimiento con esas obligaciones, se incluyen los siguientes créditos:</span>
                <ul>
                    <li data-key="canva_license_details">Para detalles sobre las licencias de contenido gratuito de Canva, puede consultar:
<a href="https://www.canva.com/learn/license/" target="_blank">https://www.canva.com/learn/license/</a></li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="third_party_links">3. Enlaces y elementos de terceros</h3>
                <span data-key="third_party_text">Este sitio incorpora enlaces y funcionalidades de empresas externas, incluyendo:</span>
                <ul>
                    <li data-key="whatsapp_integration">WhatsApp, marca registrada de Meta Platforms, Inc. Integrado para atención al cliente bajo términos de uso público.</li>
                    <li data-key="bbb_link">Better Business Bureau (BBB): Se incluye enlace directo al perfil oficial de Always Pro Painting como referencia para clientes.</li>
                    <li data-key="contact_forms">Formularios de contacto y herramientas digitales integradas para facilitar la comunicación.</li>
                </ul>
                <span data-key="compliance_statement">Siempre cumplimos con las condiciones de uso público y licencias de cada plataforma.</span>
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <h3 data-key="copyright_trademark">4. Derechos de autor y uso de marcas</h3>
                <span data-key="copyright_text">Todos los textos, logotipos, diseños propios, fotografías originales y contenidos exclusivos de Always Pro Painting LLC están protegidos por derechos de autor. Está prohibida su reproducción o distribución parcial o total sin autorización expresa y por escrito.</span> <br><br>
                <span data-key="third_party_trademarks">Las marcas y logotipos de terceros (ej. Canva, WhatsApp, BBB) son propiedad de sus titulares. Su inclusión es puramente referencial y no implica asociación o respaldo directo, salvo donde se indique expresamente.</span>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="liability_limitation">5. Limitación de responsabilidad</h3>
                <span data-key="liability_text">Always Pro Painting LLC ha tomado medidas razonables para garantizar que el contenido visual descargado desde Canva se utilice dentro de los límites legales. No obstante, si algún autor o empresa considera que se ha realizado un uso indebido, podrá comunicarse con nuestro equipo para proceder a la revisión y, de ser necesario, la eliminación del contenido.</span> <br>

                <i class="fa fa-envelope"></i> <a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3 data-key="future_additions">6. Futuras incorporaciones</h3>
                <span data-key="future_additions_text">Si en el futuro se incorporan nuevos recursos o plataformas (ej.: Google, Yelp, Meta Pixel), Always Pro Painting LLC actualizará esta página para reflejar adecuadamente sus respectivas licencias o condiciones de uso.</span>
            </p>
        </div>

         <div class="col-12">
            <p>
                <h3 data-key="jurisdiction">7. Jurisdicción</h3>
                <span data-key="jurisdiction_text">Este aviso legal se interpreta según las leyes del Estado de Florida, con jurisdicción exclusiva en los tribunales del Condado de Sarasota o Manatee para cualquier disputa relacionada con derechos de autor o propiedad intelectual.</span>
            </p>
        </div>
        
    </div>
</section>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta página
        console.log('Página de créditos cargada');
    </script>
@endpush