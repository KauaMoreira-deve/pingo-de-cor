<div class="admin-card">

    <div class="admin-card-header">
        <div>
            <h2>Publicações</h2>
            <p>Lista de publicações cadastradas no sistema.</p>
        </div>

        <span class="admin-tag">
            {{ $listarPublicacoes->count() }} registros
        </span>
    </div>

    <div class="admin-filter-row">

        <div class="admin-search-fake">
            <span aria-hidden="true">🔍</span>
            Buscar publicação...
        </div>

        <div class="admin-filter-fake">
            <span class="selected">Todas</span>
        </div>

    </div>

    <div class="admin-table-wrap">

        <table class="admin-table">

            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Link</th>
                    <th>Data Publicação</th>
                    <th>Atualizado</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($listarPublicacoes as $publicacao)

                    <tr>

                        <td>
                            <img
                                src="{{ asset ('assets/img/_MG_7517.jpg' . $publicacao->imagem_publicacoes) }}"
                                alt="{{ $publicacao->titulo_publicacoes }}"
                                class="cell-image"
                                loading="lazy"
                            >
                        </td>

                        <td>
                            <span class="cell-primary">
                                {{ $publicacao->titulo_publicacoes }}
                            </span>
                        </td>

                        <td>
                            {{ Str::limit($publicacao->descricao_publicacoes, 100) }}
                        </td>

                        <td>
                            <a
                                href="{{ $publicacao->link_publicacoes }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="admin-link"
                            >
                                Abrir
                            </a>
                        </td>

                        <td>
                            {{ date('d/m/Y H:i', strtotime($publicacao->data_publicacoes)) }}
                        </td>

                        <td>
                            {{ date('d/m/Y H:i', strtotime($publicacao->data_atualizacao_publicacoes)) }}
                        </td>

                        <td>
                            <div class="admin-actions">
                                <!-- Botões de ações podem ser adicionados aqui -->
                            </div>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7">
                            Nenhuma publicação cadastrada.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

