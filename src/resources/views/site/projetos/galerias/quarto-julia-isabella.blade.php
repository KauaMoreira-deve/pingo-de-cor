@extends('layout.site')
@section('title', 'Quarto Julia Isabella | Pingo Decor')
@section('content')
    <a href="{{ route('projetos.index') }}" class="btn-voltar">Voltar aos projetos</a>
    <div class="galeria"><img src="{{ asset('pingo-decor/assets/imagem-indisponivel.svg') }}" alt="Quarto Julia Isabella" loading="lazy"></div>
@endsection
