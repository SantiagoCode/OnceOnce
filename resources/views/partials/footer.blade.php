@if(!is_front_page())
  @include('partials.featured')
@endif
<footer class="hero footer is-dark is-medium is-relative">
  <div class="dark-screen" style="background-image: url('@asset("images/hero-bg.png")')"></div>
  <div class="dark-screen-1"></div>
  <div class="has-padding-60">
    <div class="container has-padding-10">
      <div class="columns is-valiable is-6 is-multiline contactanos">
        <div class="column is-7" data-inertia data-inertia-reveal data-inertia-delay="200">
          <h1 class="title is-size-2">Contáctanos</h1>
          <p class="contactanos-text">
            Uno de nuestros agentes se comunicará contigo en breve.
          </p>
        </div>
        <div class="column is-5 has-padding-top-40" data-inertia data-inertia-reveal data-inertia-delay="400">
          <div class="columns is-gapless is-multiline medios-contacto is-marginless">
            <div class="column is-6 is-uppercase has-margin-bottom-30" style="color: #A6A6A6">Email</div>
            <div class="column is-6 has-margin-bottom-30" style="color: #A6A6A6">
              <a href="mailto:info@realstate.com" class="text-hover white">info@realstate.com</a>  
            </div>
            <div class="column is-6 is-uppercase has-margin-bottom-30" style="color: #A6A6A6">Teléfono</div>
            <div class="column is-6 has-margin-bottom-30" style="color: #A6A6A6">
              <a href="tel:1234567890" class="text-hover white">123 456 7890</a>
            </div>
          </div>
          <a class="button is-light whatsapp-btn has-padding-left-30 has-padding-right-30 has-padding-top-20 has-padding-bottom-20">  
            <span class="icon is-large"><i data-feather="message-circle"></i></span>
            <span class="is-uppercase">WhatsApp</span>
          </a>
        </div>
      </div>
      
      <div class="columns is-multiline has-margin-top-50 footer-end" data-inertia data-inertia-reveal data-inertia-delay="600">
        <div class="column is-7 is-flex is-align-items-center">
          @include('components.social-media-buttons')
        </div>
        <div class="column is-5 is-flex is-align-items-center">
          <p style="color: #A6A6A6">© 2023 once once real state. Todos los derechos reservados.</p>
        </div>
      </div>

    </div>
  </div>
</footer>
