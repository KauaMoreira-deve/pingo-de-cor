@extends('layout.admin')

@section('actions')
    <button type="button" class="admin-primary-btn" disabled title="Painel demonstrativo">+ Novo banner</button>
@endsection

@section('content')
    @include('admin.banner.listaBanner')
@endsection

