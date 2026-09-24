@extends('layout.site')
@section('title', 'Brinquedoteca | Pingo Decor')
@section('content')
    <a href="{{ route('projetos.index') }}" class="btn-voltar">Voltar aos projetos</a>
    <div class="galeria"><img src="{{ asset('pingo-decor/assets/img/brinquedoteca.jpg') }}" alt="Brinquedoteca" loading="lazy"></div>
@endsection
