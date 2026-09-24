@extends('layout.site')
@section('title', 'Quarto Lucca | Pingo Decor')
@section('content')
    <a href="{{ route('projetos.index') }}" class="btn-voltar">Voltar aos projetos</a>
    <div class="galeria"><img src="{{ asset('pingo-decor/assets/img/lucca.webp') }}" alt="Quarto Lucca" loading="lazy"></div>
@endsection
