<x-loader/>
<div data-inertia-container class="layout">
    <main data-inertia-section class="main is-clipped" id="main">
      {{-- <x-navigation/> --}}
      <div data-solar="container" data-solar-namespace="home">
        <div class="toggle-menu">
          <div class="is-relative">
            <div class="dark-screen" style="background-image: url('@asset("images/hero-bg.png")')"></div>
            <div class="dark-screen-1"></div>
            <ul class="is-relative is-flex is-align-items-center is-justify-content-center">
              <li class="is-flex is-flex-direction-column">
                <a href="#" class="toggle-menu-link is-uppercase has-margin-bottom-10 has-text-centered has-text-light is-size-4 has-text-weight-bold">comprar</a>
                <a href="#" class="toggle-menu-link is-uppercase has-margin-bottom-10 has-text-centered has-text-light is-size-4 has-text-weight-bold">vender</a>
                <a href="#" class="toggle-menu-link is-uppercase has-margin-bottom-10 has-text-centered has-text-light is-size-4 has-text-weight-bold">rentar</a>
                <a href="#" class="toggle-menu-link is-uppercase has-margin-bottom-10 has-text-centered has-text-light is-size-4 has-text-weight-bold">nosotros</a>
                <a href="#" class="toggle-menu-link is-uppercase has-margin-bottom-10 has-text-centered has-text-light is-size-4 has-text-weight-bold">contacto</a>
              </li>
            </ul>
          </div>
          

        </div>
        @yield('content')
        @include('partials.footer')
      </div>
    </main>
</div>
