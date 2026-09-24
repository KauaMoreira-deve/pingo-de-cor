@extends('layout.site')
@section('title', 'Quarto Catarina | Pingo Decor')
@section('content')
    <a href="{{ route('projetos.index') }}" class="btn-voltar">Voltar aos projetos</a>
    <div class="galeria"><img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}" alt="Quarto Catarina" loading="lazy"></div>
@endsection
