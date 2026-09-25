<div class="admin-card">
    <div class="admin-card-header">
        <div>
            <h2>Mensagens / Contatos</h2>
            <p>Lista de contactos registados no sistema.</p>
        </div>
        <span class="admin-tag">{{ $listarContato->count() }} registos</span>
    </div>

    <div class="admin-filter-row">
        <div class="admin-search-fake" aria-label="Busca de contatos">
            <span aria-hidden="true">&#128269;</span> Buscar contacto...
        </div>
        <div class="admin-filter-fake" aria-label="Filtros de contatos">
            <span class="selected">Todos</span>
        </div>
    </div>

    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Companheiro(a)</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade/Bairro</th>
                    <th scope="col">Profissão</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listarContato as $contato)
                    <tr>
                        <td><span class="cell-primary">{{ data_get($contato, 'nome_contato') }}</span></td>
                        <td>{{ data_get($contato, 'nome_companheiro_contato') }}</td>
                        <td>{{ data_get($contato, 'email_contato') }}</td>
                        <td>{{ data_get($contato, 'telefone_contato') }}</td>
                        <td>{{ data_get($contato, 'cidade_bairro_contato') }}</td>
                        <td>{{ data_get($contato, 'profissao_contato') }}</td>
                        <td><button type="button" class="admin-action" disabled>Ver</button></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Nenhum contacto encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="admin-card-footer">Total de contactos: {{ $listarContato->count() }}</div>
</div>s