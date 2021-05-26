<header id="page-header">
  <div id="prenav" class="uk-visible@m">
    <div class="uk-container">
      <div class="uk-align-right uk-navbar-right">
        <ul>
            <li class="social"><a href="{!! get_option('th_youtube') !!}" target="_blank" class="social_icon youtube"><i class="fab fa-youtube"></i></a></li>
            <li class="social"><a href="{!! get_option('th_twitch') !!}" target="_blank" class="social_icon twitch"><i class="fab fa-twitch"></i></a></li>
            <li class="social"><a href="{!! get_option('th_discord') !!}" target="_blank" class="social_icon discord"><i class="fab fa-discord"></i></a></li>
            <li class="social"><a href="{!! get_option('th_twitter') !!}" target="_blank" class="social_icon twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social"><a href="{!! get_option('th_instagram') !!}" target="_blank" class="social_icon instagram"><i class="fab fa-instagram"></i></a></li>
            <li class="social"><a href="{!! get_option('th_github') !!}" target="_blank" class="social_icon github"><i class="fab fa-github"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="nav">
      <div class="uk-container">

          <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
              <div class="uk-navbar-left">
                <a class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon" href="#menu-mobile" data-uk-navbar-toggle-icon data-uk-toggle></a>

                <a class="uk-navbar-item uk-visible@m uk-logo" href="{{ get_home_url() }}">
                  <img src="{{ get_template_directory_uri() }}/dist/images/logos/logo.svg" alt="{{ bloginfo('name') }}">
                </a>
              </div>
              <div class="uk-navbar-right uk-visible@m">
                  <div class="uk-navbar-item">
                      {!! wp_nav_menu(['theme_location' => 'nav', 'container' => false, 'menu_id' => 'main-nav']) !!}
                  </div>
              </div>
              <div class="uk-navbar-center">
                <a class="uk-navbar-item uk-hidden@m uk-logo" href="{{ get_home_url() }}">
                  <img src="{{ get_template_directory_uri() }}/dist/images/logos/logo.svg" alt="{{ bloginfo('name') }}">
                </a>
              </div>
          </nav>
      </div>
  </div>

</header>
