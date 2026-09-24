<div class="admin-card">
    <div class="admin-card-header">
        <div>
            <h2>Banners e destaques</h2>
            <p>Imagens de capa e chamadas visuais da página inicial.</p>
        </div>
        <span class="admin-tag">{{ $listarBanner->count() }} registros</span>
    </div>

    <div class="admin-filter-row">
        <div class="admin-search-fake" aria-label="Busca de banners">
            <span aria-hidden="true">&#128269;</span> Buscar banner...
        </div>
        <div class="admin-filter-fake" aria-label="Filtros de banners">
            <span class="selected">Todos</span><span>Publicados</span><span>Rascunhos</span>
        </div>
    </div>

    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Destaque</th>
                    <th scope="col">Local no site</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Atualizado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listarBanner as $banner)
                    <tr>
                        <td>
                            <img class="cell-image" src="{{ asset(data_get($banner, 'image')) }}"
                                alt="Prévia de {{ data_get($banner, 'title') }}" loading="lazy">
                        </td>
                        <td><span class="cell-primary">{{ data_get($banner, 'title') }}</span></td>
                        <td>{{ data_get($banner, 'local') }}</td>
                        <td>
                            <span class="admin-status {{ data_get($banner, 'status_tone', 'draft') }}">
                                {{ data_get($banner, 'status') }}
                            </span>
                        </td>
                        <td>{{ data_get($banner, 'updated') }}</td>
                        <td><button type="button" class="admin-action" disabled>Editar</button></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum banner cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="admin-card-footer">Total de banners: {{ $listarBanner->count() }}</div>
</div>
