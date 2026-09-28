@extends('layout.admin')

@section('actions')
    <button type="button" class="admin-primary-btn" disabled title="Painel demonstrativo">+ Novo Contato</button>
@endsection

@section('content')
    @include('admin.contato.listarContato')
@endsection

