<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="logo.jfif" sizes="192x192" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! $title !!}</title>

    {{-- Scripts --}}
    @stack('head-scripts')

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('head-after')
</head>
<body>

<div id="app">

  <nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="logo.jfif" alt="Innerlife Chapel NY logo " width="112" height="38">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="home">
        Messages
      </a>
      <a class="navbar-item" href="admin-members">
        Members
      </a>
      <a class="navbar-item" href="admin-new-here">
        New Here
      </a>
      <a class="navbar-item" href="admin-about">
        About
      </a>
      <a class="navbar-item" href="admin-leaders">
        Leaders 
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Resources
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="admin-announcements">
            Announcements
          </a>
          <a class="navbar-item" href="admin-readings">
            Readings
          </a>
          <a class="navbar-item" href="admin-events">
            Events
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="button is-light" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

// Add a click event on each of them
$navbarBurgers.forEach( el => {
el.addEventListener('click', () => {

// Get the target from the "data-target" attribute
const target = el.dataset.target;
const $target = document.getElementById(target);

// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
el.classList.toggle('is-active');
$target.classList.toggle('is-active');

});
});
}

});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
(document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
  $notification = $delete.parentNode;

  $delete.addEventListener('click', () => {
    $notification.parentNode.removeChild($notification);
  });
});
});
</script>

<section class="hero is-medium is-bold has-background-white">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2 has-text-white">
              @if(session()->get('message1'))
                  <div class="notification is-success is-light subtitle is-4">
                    <button class="delete"></button>
                     {{ session()->get('message1') }}
                  </div>
              @endif
                    {!! $slot !!}
            </dh1>
        </div>
    </div>
</section>

    <footer class="footer" style="background-color:#E9D6D6;">

      <div class="content title is-5 has-text-centered">
        <p>
          <script>document.write(new Date().getFullYear())</script> © <a href="/">Innerlife Chapel International</a>
        </p>
      </div>
    </footer>
</div>

@stack('bottom')

</body>
</html>
