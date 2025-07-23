  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center text-center">
          <img src="{{ asset('storage/img/titulofooter.webp') }}" alt="Logo Always Pro Painting"  style="width:50%;">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center text-center"> <!-- Centrado horizontal y texto centrado -->
        <!-- Columna Contacto -->
        <div class="col-4">
          <h5 class="fw-bold  mb-3" style="color:#000; font-weight:800;" data-key="footer_contact">Contacto</h5> <!-- Título en negrita y negro -->
          <div class="text-white"> 
            <a href="mailto:info@alwayspropainting.com" style="color:#fff;" aria-label="Enviar correo a info@alwayspropainting.com">info@alwayspropainting.com</a><br>
            <a target="_blank" href="https://wa.me/17274176867" style="color:#fff;" aria-label="Contactar por WhatsApp al (727) 417-6867">(727) 417-6867</a> <br>
            <a target="_blank" href="https://wa.me/17274176753" style="color:#fff;" aria-label="Contactar por WhatsApp al (727) 417-6753">(727) 417-6753</a>      

          </div>
        </div>
        
        <!-- Columna Ubicación -->
        <div class="col-4">
          <h5 class="fw-bold  mb-3" style="color:#000; font-weight:800;" data-key="footer_location">Ubicación</h5>
          <div class="text-white">
            <a href="https://www.google.com/maps/place/360+Central+Ave+Ste+800,+St.+Petersburg,+FL+33701,+EE.+UU./@27.770786,-82.6405255,1006m/data=!3m2!1e3!4b1!4m6!3m5!1s0x88c2e1834e6881e5:0xb87f07635aaf958!8m2!3d27.7707813!4d-82.6379506!16s%2Fg%2F11q_6cngmx?entry=ttu&g_ep=EgoyMDI1MDYyOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="color:#fff;" aria-label="Ver ubicación en Google Maps: 360 Central Avenue, Suite 800, San Petersburgo, Florida 33701">
            <span data-key="footer_address">360 Central Avenue, Suite 800, <br>
            St. Petersburg, Florida 33701, United States</span></a>
          </div>
        </div>
        
        <!-- Columna Áreas de Servicio -->
        <div class="col-4">
          <h5 class="fw-bold  mb-3" style="color:#000; font-weight:800;" data-key="footer_service_areas">Áreas de Servicio</h5>
          <div class="text-white">
            <span data-key="footer_service_areas_content">Sarasota, Bradenton y Áreas circundantes en Florida</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="d-flex flex-wrap gap-3 py-3">
          <span class="px-2"><a href="{{ route('politicas') }}" style="color:#fff;" aria-label="Ver Políticas de Privacidad" data-key="footer_privacy_policy">Políticas de privacidad</a></span>
          <span class="px-2"><a href="{{ route('terminos') }}" style="color:#fff;" aria-label="Ver Términos y Condiciones" data-key="footer_terms">Términos y Condiciones</a></span>
          <span class="px-2"><a href="{{ route('declaracion') }}" style="color:#fff;" aria-label="Ver Declaración de Accesibilidad" data-key="footer_accessibility">Declaración de Accesibilidad</a></span>
          <span class="px-2"><a href="{{ route('acreditacion') }}" style="color:#fff;" aria-label="Ver Acreditaciones" data-key="footer_accreditations">Acreditaciones</a></span>
          <span class="px-2"><a href="{{ route('credito') }}" style="color:#fff;" aria-label="Ver Créditos" data-key="footer_credit">Crédito</a></span>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; 2025<strong><span class="text-uppercase"> Always Pro Painting</span></strong>. <span data-key="footer_rights">TODOS LOS DERECHOS RESERVADOS.</span>
      </div>
      
    </div>
  </footer><!-- End Footer -->
