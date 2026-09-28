@extends('layout.admin')

@section('actions')
    <button type="button" class="admin-primary-btn" disabled title="Painel demonstrativo">+ Novo Cliente</button>
@endsection

@section('content')
    @include('admin.cliente.listarCliente')
@endsection

