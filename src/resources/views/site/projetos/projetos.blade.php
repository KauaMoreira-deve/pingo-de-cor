@extends('layout.site')
@section('title', 'Projetos | Pingo Decor')
@section('content')
<!-- SEÇÃO PROJETOS -->
<section id="projetos"></section>

<div class="projetos-linha">

  <a href="{{ route('projetos.show', 'quarto-olivia') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/img/olivia.webp') }}" alt="Quarto Olivia" loading="lazy">
      <p>QUARTO OLIVIA</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-matteo') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}">
      <p>QUARTO MATTEO</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-lucca') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/img/lucca.webp') }}">
      <p>QUARTO LUCCA</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-julia-isabella') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}">
      <p>QUARTO JULIA E ISABELLA</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-joaquim') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}" alt="">
      <p>QUARTO JOAQUIM</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-dan-ava') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/img/_MG_1853.jpg') }}">
      <p>QUARTO DAN & AVA</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-catarina') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}">
      <p>QUARTO CATARINA</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-benjamin') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}">
      <p>QUARTO BENJAMIN</p>
    </div>
  </a>

  <a href="{{ route('projetos.show', 'quarto-alice-catarina') }}" class="projeto-card">
    <div class="projeto quarto">
      <img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}">
      <p>QUARTO ALICE & CATARINA</p>
    </div>
  </a>

<a href="{{ route('projetos.show', 'brinquedoteca') }}" class="projeto-card">
  <div class="projeto">
<img src="{{ asset('pingo-decor/assets/img/brinquedoteca.jpg') }}" alt="">
    <p>BRINQUEDOTECA GAEL, THEO E SOPHIA</p>
  </div>
</a>
</div>








<!-- GSAP -->


<!-- ScrollTrigger -->
@endsection
