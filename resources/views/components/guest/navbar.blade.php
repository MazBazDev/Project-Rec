<nav>
    <div class="menu-container">
      <!-- burger menu -->
      <input type="checkbox" aria-label="Toggle menu" />
      <span></span>
      <span></span>
      <span></span>

      <!-- logo -->
      <a href="{{ route("home") }}" class="menu-logo">
        <img src="{{ asset("assets/img/logo_white.svg") }}" alt="">
      </a>

      <!-- menu items -->
      <div class="menu">
        <ul>
          <!-- logo -->
          <li class="phone-logo">
            <a href="{{ route("home") }}">
              <img src="{{ asset("assets/img/logo_white.svg") }}" alt="">
            </a>
          </li>
          @if(setting("sec2.enable", true))
          <li>
            <a href="#section2">La selection</a>
          </li>
          @endif

          @if(setting("sec3.enable", true))
          <li>
            <a href="#section3">Nous soutenir</a>
          </li>
          @endif

          @if(setting("sec4.enable", true))
          <li>
            <a href="#section4">Le festival</a>
          </li>
          @endif

          @if(setting("sec5.enable", true))
          <li>
            <a href="#section5">Partenaires</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>