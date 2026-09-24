<aside class="app-sidebar admin-sidebar" aria-label="Menu administrativo">
    <a class="admin-brand" href="{{ route('admin.dashboard') }}">
        <span class="admin-brand-mark"><img src="{{ asset('pingo-decor/assets/logo.svg') }}" alt="Pingo Decor"></span>
        <span class="admin-brand-label">Painel de conteúdo</span>
    </a>
    <div class="admin-sidebar-inner">
        <p class="admin-nav-heading">GERENCIAR</p>
        <nav class="admin-nav" aria-label="Páginas do painel">
            <a class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><span class="admin-nav-icon">&#9635;</span><span>Visão geral</span></a>
            <a class="admin-nav-link {{ request()->routeIs('admin.banner.*') ? 'active' : '' }}" href="{{ route('admin.banner.index') }}"><span class="admin-nav-icon">&#9635;</span><span>Banners</span></a>
            <a class="admin-nav-link" href="#"><span class="admin-nav-icon">&#182;</span><span>Textos do site</span></a>
            <a class="admin-nav-link" href="#"><span class="admin-nav-icon">&#9638;</span><span>Projetos</span></a>
            <a class="admin-nav-link" href="#"><span class="admin-nav-icon">&#9671;</span><span>Galerias</span></a>
            <a class="admin-nav-link" href="#"><span class="admin-nav-icon">&#9645;</span><span>Publicações</span></a>
            <a class="admin-nav-link" href="#"><span class="admin-nav-icon">&#9776;</span><span>Páginas</span></a>
        </nav>
        <p class="admin-nav-heading admin-nav-heading-spaced">PERSONALIZAÇÃO</p>
        <nav class="admin-nav" aria-label="Personalização">
           
        </nav>
        <div class="admin-sidebar-note">
            <span class="admin-note-dot"></span>
            <div><strong>Conteúdo ilustrativo</strong><small>Visualização do futuro painel</small></div>
        </div>
    </div>
</aside>
