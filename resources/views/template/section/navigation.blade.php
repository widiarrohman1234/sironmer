@php

function checkrouteactive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Sironmer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{checkrouteactive('home')}}">
            <a class="nav-link" href="{{url('home')}}">Home</a>
          </li>
          <li class="nav-item {{checkrouteactive('beranda')}}">
            <a class="nav-link" href="{{url('beranda')}}">Beranda</a>
          </li>
          <li class="nav-item {{checkrouteactive('Q&A')}}">
            <a class="nav-link" href="{{url('Q&A')}}">Q & A</a>
          </li>
          <li class="nav-item {{checkrouteactive('tentang')}}">
            <a class="nav-link" href="#">Tentang</a>
          </li>
          <li class="nav-item {{checkrouteactive('kontak')}}">
            <a class="nav-link" href="#">Kontak</a>
          </li>
          <li class="nav-item {{checkrouteactive('login')}}">
            <a class="nav-link" href="{{url('login')}}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>