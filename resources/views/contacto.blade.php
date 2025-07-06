@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel" data-ride="carousel">


        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-color: transparent !important; background-image: url('{{ asset('storage/img/servicios/contacto.webp') }}');">
          </div>
        </div>
    </div>
</section>
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contactanos</h2>
        </div>

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <img src="{{ asset('storage/img/servicios/contacto_address.webp') }}" alt="Address" style="max-width: 300px; height: auto;">
              <h3>360 Central Avenue, Suite 800, St. Petersburg, Florida 33701, United States</h3>
            </div>
          </div>
          
          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <img src="{{ asset('storage/img/servicios/whatsapp.webp') }}" alt="Phone" style="max-width: 300px; height: auto;">
              <h3 style="margin-top: 20px;"><a href="https://wa.me/17274176867" style="color:#000;" aria-label="Contactar por WhatsApp al (727) 417-6867">(727) 417-6867</a>  <a href="https://wa.me/17274176753" style="color:#000; margin-left: 20px;" aria-label="Contactar por WhatsApp al (727) 417-6753">(727) 417-6753</a></h3>
            </div>
          </div>

         
          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <img src="{{ asset('storage/img/servicios/email.webp') }}" alt="Email" style="max-width: 300px; height: auto;">
              <h3 style="margin-top: 20px;"><a href="mailto:luis@alwayspropainting.com" style="color:#000;" aria-label="Contactar por correo electrónico a luis@alwayspropainting.com">luis@alwayspropainting.com</a></h3>
            </div>
          </div>

          <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <h3 style="margin-top: 20px;">Redes Sociales</h3>
<style>
  /* Solo para la lista de redes sociales de contacto */
  .contact-social-list li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }
  .contact-social-list i.icofont-arrow-right {
    background: none !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    padding: 0 !important;
    margin-right: 8px;
    font-size: 1.1em;
    color: #000;
    vertical-align: middle;
  }
</style>
              <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                  <ul style="list-style-type: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://bsky.app/profile/alwayspropainting.bsky.social" style="color:#000;" target="_blank" aria-label="Visitar Bluesky">BLUESKY</a></li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://www.facebook.com/alwayspropainting" style="color:#000;" target="_blank" aria-label="Visitar Facebook">FACEBOOK</a></li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://www.instagram.com/alwayspropainting" style="color:#000;" target="_blank" aria-label="Visitar Instagram">INSTAGRAM</a></li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://www.threads.com/@alwayspropainting" style="color:#000;" target="_blank" aria-label="Visitar Threads">THREDS</a></li>
                  </ul>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                  <ul style="list-style-type: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://www.tiktok.com/@alwayspropainting" style="color:#000;" target="_blank" aria-label="Visitar TikTok">TIKTOK</a></li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://twitter.com/alwayspropaint" style="color:#000;" target="_blank" aria-label="Visitar Twitter">TWITTER</a></li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://www.youtube.com/@ALWAYSPROPAINTING" style="color:#000;" target="_blank" aria-label="Visitar YouTube">YOUTUBE</a></li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;"><i class="icofont-arrow-right" style="background: none; border-radius: 0; box-shadow: none; padding: 0; margin-right: 8px;"></i><a href="https://www.bbb.org/us/fl/sarasota/profile/residential-painter/always-pro-painting-llc-0653-90440065" style="color:#000;" target="_blank" aria-label="Visitar Better Business Bureau (BBB)">Better Business Bureau (BBB)</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

         
          

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

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