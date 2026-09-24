@extends('layout.site')
@section('title', 'Quarto Dan Ava | Pingo Decor')
@section('content')
    <a href="{{ route('projetos.index') }}" class="btn-voltar">Voltar aos projetos</a>
    <div class="galeria"><img src="{{ asset('pingo-decor/assets/img/_MG_1853.jpg') }}" alt="Quarto Dan Ava" loading="lazy"></div>
@endsection
