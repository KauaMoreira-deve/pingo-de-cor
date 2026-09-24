<!doctype html>
<html lang="pt-BR">
@include('partials.partialsAdmin.headAdmin')
<body class="admin-body">
<div class="app-wrapper">
    @include('partials.partialsAdmin.menuLateral')
    @include('partials.partialsAdmin.topoAdmin')
    <main class="app-main">
        <div class="admin-page container-fluid">
            <div class="admin-page-heading">
                <div>
                    <p class="admin-eyebrow">@yield('eyebrow', 'PAINEL PINGO DECOR')</p>
                    <h1>@yield('heading', 'Vis?o geral')</h1>
                    <p class="admin-description">@yield('description', 'Organize o conte?do visual do seu site em um s? lugar.')</p>
                </div>
                <div class="admin-heading-actions">@yield('actions')</div>
            </div>
            @yield('content')
        </div>
    </main>
    @include('partials.partialsAdmin.rodapeAdmin')
</div>
<div class="admin-backdrop" data-admin-close></div>
@include('partials.partialsAdmin.script')
</body>
</html>
