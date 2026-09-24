@extends('layout.admin')
@section('title', 'Visão geral | Painel Pingo Decor')
@section('navtitle', 'Visão geral')
@section('eyebrow', 'BEM-VINDA AO SEU ESPAÇO')
@section('heading', 'Seu site, com a sua essência')
@section('description', 'Uma visão clara do conteúdo e das imagens que compõem a Pingo Decor.')
@section('content')
    <section class="admin-hero" aria-label="Destaque do painel">
        <div class="admin-hero-content">
            <span class="admin-hero-kicker">CONTEÚDO E IDENTIDADE</span>
            <h2>Ambientes especiais começam com boas histórias.</h2>
            <p>Organize as imagens, textos e projetos que apresentam seu trabalho em cada página do site.</p>
            <a href="{{ route('admin.banner.index') }}" class="admin-primary-btn">Explorar projetos <span>&rarr;</span></a>
        </div>
    </section>
    @include('admin.cards')
    <div class="admin-dashboard-grid">
        <section class="admin-card">
            <div class="admin-card-header"><div><h2>Áreas de conteúdo</h2><p>Acesse as seções que compõem o site.</p></div><span class="admin-tag">Visão geral</span></div>
            <div class="admin-card-body">
                <div class="admin-section-list">
                    <a href="{{ route('admin.banner.index') }}" class="admin-section-link"><span class="icon">&#9671;</span><span><strong>Banners</strong><small>Imagens de destaque</small></span><span class="arrow">&rarr;</span></a>
                   
                </div>
            </div>
        </section>
        <section class="admin-card">
            <div class="admin-card-header"><div><h2>Atividade recente</h2><p>Prévia de alterações de conteúdo.</p></div><span class="admin-tag">Exemplo</span></div>
            <div class="admin-card-body admin-activity">
                <div class="admin-activity-row"><span class="admin-activity-dot"></span><div><strong>Banner principal atualizado</strong><small>Home · 18 set 2026 às 10:42</small></div></div>
                <div class="admin-activity-row"><span class="admin-activity-dot"></span><div><strong>Projeto Quarto Olivia publicado</strong><small>Portfólio · 17 set 2026 às 16:25</small></div></div>
                <div class="admin-activity-row"><span class="admin-activity-dot"></span><div><strong>Texto de apresentação revisado</strong><small>Sobre · 15 set 2026 às 14:08</small></div></div>
                <div class="admin-activity-row"><span class="admin-activity-dot"></span><div><strong>Nova publicação adicionada</strong><small>Publicações · 12 set 2026 às 09:32</small></div></div>
            </div>
        </section>
    </div>
@endsection
