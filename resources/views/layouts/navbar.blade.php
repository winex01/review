<header class="main-header">
  <!-- Logo -->
  <a href="../../index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LTE</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

   <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
          @auth
            @include('layouts.profile')
          @else
            <li>
              <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>

            <li>
              <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endauth
      </ul>
    </div>
  </nav>
</header>