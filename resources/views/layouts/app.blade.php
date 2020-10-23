<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="logo.jfif" sizes="192x192" type="image/x-icon">
    <meta name="description" content="Official website of the innerlife Chapel International New York Branch.">
    <meta name="keywords" content="InnerlifeChapelNY, Innerlife, InnerlifeChapelbx, Innerlife Chapel International">
    <meta name="author" content="Cassidy Blay" />
    <meta name="contact" content="cassidyblay@gmail.com" />
    <meta name="copyright" content="Copyright (c)2020 innerlifechapelny.com" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

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
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96580657-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96580657-4');
</script>


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
      <a class="navbar-item" href="new-here">
        New Here
      </a>
      <a class="navbar-item" href="about">
        About
      </a>
      <a class="navbar-item" href="leaders">
        Leaders
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Resources
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="announcements">
            Announcements
          </a>
          <a class="navbar-item" href="readings">
            Readings
          </a>
          <a class="navbar-item" href="events">
            Events
          </a><hr>
          <a class="navbar-item has-text-primary" href="members">
            Register as Member
          </a>
        </div>
      </div>
      <a class="navbar-item" href="support-us">
        Support Us
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a href="https://www.instagram.com/i.c.i_ny/?igshid=qqp433wp7hd0" target="_blank" class="bd-tw-button button">
              <span class="icon">
                <i class="fa fa-instagram"></i>
              </span>
              <span>
                Follow
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button is-primary" href="contact-us">
              <span class="icon">
                <i class="fa fa-envelope"></i>
              </span>
              <span>Get In Touch!</span>
            </a>
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

    @yield('content')

    <section class="hero has-background-white">
      <div class="hero-body">
        <h1 class="title is-3 has-text-centered has-text-primary">
          You can locate us...
        </h1>
        <p class="title is-5 has-text-centered">
        <strong>2 Van Cortlandt Ave E, The Bronx, NY 10468, USA</strong>
      </p><br>
        <p class="subtitle is-5 has-text-centered">
          Sunday Service: 10am
        </p>
        <p class="subtitle is-5 has-text-centered">
          +1 (914) 351-0534,
          +1 (917) 815-3995,<br>
          +1 (917) 340-6565, +1 (774) 253-1481
        </p>
        <p class="subtitle is-5 has-text-centered">
          <strong>InnerlifeChapelbx@gmail.com</strong>
        </p>
        <p class="subtitle is-5 has-text-centered"><a target="_blank" href="https://www.google.com/maps/dir//2+Van+Cortlandt+Ave+E,+The+Bronx,+NY+10468,+USA/@40.8769589,-73.8896974,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89c2f375a21252ed:0xfec3438aec2d83ba!2m2!1d-73.8875034!2d40.8769589" class="button is-medium is-primary">Get Directions</a></p>
          <iframe class="has-ratio" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3016.7682929067905!2d-73.88969208458995!3d40.876958879314294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f375a21252ed%3A0xfec3438aec2d83ba!2s2%20Van%20Cortlandt%20Ave%20E%2C%20The%20Bronx%2C%20NY%2010468%2C%20USA!5e0!3m2!1sen!2sgh!4v1586550927389!5m2!1sen!2sgh" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section>

    <footer class="footer" style="background-color:#E9D6D6;">

      <div class="content has-text-centered">
         <p><strong>Follow us</strong> <a href="https://www.instagram.com/i.c.i_ny/?igshid=qqp433wp7hd0" target="_blank" ><i class="fa fa-instagram"></i> Instagram  </a>| See <a href="cookies">Cookies Policy</a> and <a href="terms">Terms & Conditions</a>.
        </p>
        <p class="subtitle is-4">
          <script>document.write(new Date().getFullYear())</script> © <a href="/">Innerlife Chapel International</a>
        </p>
        <small>Made with <i class="fa fa-heart has-text-danger"></i> by <a href="https://api.whatsapp.com/send?phone=233242877574">Cassidy</a>. </small>
      </div>
    </footer>
</div>

@stack('bottom')

</body>
</html>
