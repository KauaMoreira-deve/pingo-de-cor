@extends('layout.admin')

@section('actions')
    <button type="button" class="admin-primary-btn" disabled title="Painel demonstrativo">+ Nova Publicação</button>
@endsection

@section('content')

    @include('admin.publicacoes.listaPublicacoes')
    
@endsection

