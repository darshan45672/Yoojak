<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <div class="py-2 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 d-none d-lg-block">
          <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
          <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
          <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
        </div>
        <div class="col-lg-4 text-right">
          @guest
          <a href="{{ route('login') }}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>    
          <a href="{{ route('register') }}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          @endguest

          @auth    
          <div class="text-right d-flex">
            <a href="{{ route('profile.show', Auth::user()->id) }}" class="mt-2 small mr-3"><span class="icon-unlock-alt mr-1"></span>{{ Auth::user()->name }} </a>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button  class="btn btn-danger ml-4" type="submit"><span class="icon-unlock-alt"></span> Log Out</button>
          </form>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </div>

  <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
      <div class="d-flex align-items-center">
        <div class="site-logo">
          <a href="{{ route('home') }}" class="d-block">
            <img src="images/logo-dark.png" alt="Image" class="img-fluid" style="height: 28px">
          </a>
        </div>
        <div class="mr-auto">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active">
                <a href="{{ route('home') }}" class="nav-link text-left">Home</a>
              </li>
              <li class="has-children">
                <a href="{{ route('about') }}" class="nav-link text-left">About Us</a>
                <ul class="dropdown">
                  <li><a href="https://ajiet.edu.in/" target="blank">Our Institution</a></li>
                  <li><a href="{{ route('about') }}">Our Placements</a></li>
                </ul>
              </li>
              <li>
                <a href="{{ route('placedStudents') }}" class="nav-link text-left">Placed Students</a>
              </li>
              <li>
                <a href="{{ route('placementUpdates') }}" class="nav-link text-left">Placement Updates</a>
              </li>
              <li >
                  <a href="{{ route('contact') }}" class="nav-link text-left">Contact</a>
                </li>
            </ul>                                                                                                                                                                                                                                                                                          </ul>
          </nav>

        </div>
        <div class="ml-auto">
          <div class="social-wrap">
            <a href="https://www.linkedin.com/company/dev-nation/mycompany/" target="blank"><span class="icon-linkedin"></span></a>
            <a href="https://www.instagram.com/devnationajiet?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="  target="blank"><span class="icon-instagram"></span></a>
            <a href="https://github.com/Ajiet-DevNation" target="blank" ><span class="icon-github"></span></a>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
              class="icon-menu h3"></span></a>
          </div>
        </div>
       
      </div>
    </div>
  </header>