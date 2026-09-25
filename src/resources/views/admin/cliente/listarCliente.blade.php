<div class="admin-card">
    <div class="admin-card-header">
        <div>
            <h2>Clientes</h2>
            <p>Lista de clientes cadastrados no sistema.</p>
        </div>
        <span class="admin-tag">{{ $listarCliente->count() }} registros</span>
    </div>

    <div class="admin-filter-row">
        <div class="admin-search-fake" aria-label="Busca de clientes">
            <span aria-hidden="true">&#128269;</span> Buscar cliente...
        </div>
        <div class="admin-filter-fake" aria-label="Filtros de clientes">
            <span class="selected">Todos</span><span>Ativos</span><span>Inativos</span>
        </div>
    </div>

    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Atualizado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listarCliente as $cliente)
                    <tr>
                        <td>
                            <img class="cell-image" src="{{ asset(data_get($cliente, 'foto_cliente')) }}"
                                alt="Foto de {{ data_get($cliente, 'nome_cliente') }}" loading="lazy">
                        </td>
                        <td><span class="cell-primary">{{ data_get($cliente, 'nome_cliente') }}</span></td>
                        <td>{{ data_get($cliente, 'email_cliente') }}</td>
                        <td>
                            <span class="admin-status {{ data_get($cliente, 'status_cliente') == 'Ativo' ? 'active' : 'inactive' }}">
                                {{ data_get($cliente, 'status_cliente') }}
                            </span>
                        </td>
                        <td>{{ data_get($cliente, 'data_atualizacao_cliente') }}</td>
                        <td><button type="button" class="admin-action" disabled>Editar</button></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum cliente cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="admin-card-footer">Total de clientes: {{ $listarCliente->count() }}</div>
</div>