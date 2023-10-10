<nav class="navbar has-padding-top-40 is-fixed-top is-spaced columns is-transparent" role="navigation" data-cursor-stick data-cursor="-menu">

  <div class="container is-flex has-padding-10">
    <div class="column is-1 is-hidden-desktop is-flex is-align-items-center is-justify-content-center">
      <span class="icon is-large menu-button-trigger has-cursor-pointer"
        style="width: 48px; height: 48px;">
        <i data-feather="menu"></i>
      </span>
    </div>

    <div class="column is-5 is-align-self-flex-end is-hidden-touch">
      <div class="navbar-section columns">
        <div class="nav-item column is-4">
          <a href="#" class="navbar-item-link has-text-light text-hover light">
            COMPRAR
          </a>
        </div>
        <div class="nav-item column is-4">
          <a href="#" class="navbar-item-link has-text-light text-hover light">
            VENDER
          </a>
        </div>
        <div class="nav-item column is-4">
          <a href="#" class="navbar-item-link has-text-light text-hover light">
            RENTAR
          </a>
        </div>
      </div>
    </div>

    <div class="column is-2 is-offset-6-touch is-flex is-align-items-end is-align-self-flex-end">
      <img class="" src="@asset('images/nav-logo.svg')" alt="logo 11-11">
      <div class="nav-section logo">
      </div>
    </div>

    <div class="column is-5 is-align-self-flex-end is-hidden-touch">
      <div class="navbar-section columns">
        <div class="nav-item column is-6 has-text-right">
          <a href="#" class="navbar-item-link has-text-light text-hover light">
            NOSOTROS
          </a>
        </div>
        <div class="nav-item column is-6 has-text-right">
          <a href="#" class="navbar-item-link has-text-light text-hover light">
            CONTACTO
          </a>
        </div>
      </div>
    </div>
  </div>


  {{-- <a href="{{home_url()}}" class="name is-size-7 has-text-dark"
    style="writing-mode: vertical-lr;
    transform: rotate(180deg);">
    <span>Amerinode <b>Latam</b></span>
  </a>
  <div class="menu-trigger">
    <a id="open_menu" class="icon has-text-dark"><i data-feather="menu"></i></a>
  </div>
  <div class="call-to-action is-size-7 has-text-grey"
    style="writing-mode: vertical-lr;
    transform: rotate(180deg);">
    <span clas="icon"><i data-feather="chevron-up"></i></span>
    <span>Scroll</span>
  </div> --}}
</nav>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const toggleMenu = (e) => {
      e.preventDefault()
      const menu = document.querySelector('.toggle-menu');
      menu.classList.toggle('active');
      console.log('a');
    }
    const menuBtn = document.querySelector('.menu-button-trigger');
    const menuLink = document.querySelectorAll('.toggle-menu-link');
  
    menuBtn.addEventListener('click', toggleMenu)
    menuLink.forEach(link => {
      link.addEventListener('click', toggleMenu)
    });
  });
</script>


