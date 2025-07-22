@extends('layouts.app')

@section('title', 'Página de Inicio')

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
          <h2>CRÉDITOS Y LICENCIAS</h2>
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
                <h3>1. Titularidad del sitio</h3>
            Este sitio web es propiedad de Always Pro Painting LLC, con sede en St. Petersburg, FL, y operación comercial verifi cada en Sarasota, Bradenton y áreas circundantes. El contenido se rige por las leyes del Estado de Florida y la legislación federal vigente.
        </div>
        <div class="col-12">
            <p>
                <h3>2. Licencias de contenido visual (imágenes, íconos, gráficos)</h3>
                Este sitio web utiliza imágenes, íconos y elementos gráfi cos creados o descargados desde Canva. Dichos elementos están sujetos a las condiciones de uso establecidas por Canva para contenido gratuito.
En cumplimiento con esas obligaciones, se incluyen los siguientes créditos:
                <ul>
                    <li>Para detalles sobre las licencias de contenido gratuito de Canva, puede consultar:
<a href="https://www.canva.com/learn/license/" target="_blank">https://www.canva.com/learn/license/</a></li>
                </ul>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>3. Enlaces y elementos de terceros</h3>
                Este sitio incorpora enlaces y funcionalidades de empresas externas, incluyendo:
                <ul>
                    <li>WhatsApp, marca registrada de Meta Platforms, Inc. Integrado para atención al cliente bajo términos de uso público.</li>
                    <li>Better Business Bureau (BBB): Se incluye enlace directo al perfi l ofi cial de Always Pro Painting como referencia para clientes.</li>
                    <li>Formularios de contacto y herramientas digitales integradas para facilitar la comunicación.</li>
                </ul>
                Siempre cumplimos con las condiciones de uso público y licencias de cada plataforma.
            </p>
        </div>
       
        <div class="col-12">
            <p>
                <h3>4. Derechos de autor y uso de marcas</h3>
                Todos los textos, logotipos, diseños propios, fotografías originales y contenidos exclusivos de Always Pro Painting LLC están protegidos por derechos de autor. Está prohibida su reproducción o distribución parcial o total sin autorización expresa y por escrito. <br><br>
                Las marcas y logotipos de terceros (ej. Canva, WhatsApp, BBB) son propiedad de sus titulares. Su inclusión es puramente referencial y no implica asociación o respaldo directo, salvo donde se indique expresamente.
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>5. Limitación de responsabilidad</h3>
                Always Pro Painting LLC ha tomado medidas razonables para garantizar que el contenido visual descargado desde Canva se utilice dentro de los límites legales. No obstante, si algún autor o empresa considera que se ha realizado un uso indebido, podrá comunicarse con nuestro equipo para proceder a la revisión y, de ser necesario, la eliminación del contenido. <br>

                <i class="fa fa-envelope"></i> <a href="mailto:info@alwayspropainting.com">info@alwayspropainting.com</a>
            </p>
        </div>

        <div class="col-12">
            <p>
                <h3>6. Futuras incorporaciones</h3>
                Si en el futuro se incorporan nuevos recursos o plataformas (ej.: Google, Yelp, Meta Pixel), Always Pro Painting LLC actualizará esta página para refl ejar adecuadamente sus respectivas licencias o condiciones de uso.
            </p>
        </div>

         <div class="col-12">
            <p>
                <h3>7. Jurisdicción</h3>
                Este aviso legal se interpreta según las leyes del Estado de Florida, con jurisdicción exclusiva en los tribunales del Condado de Sarasota o Manatee para cualquier disputa relacionada con derechos de autor o propiedad intelectual.
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