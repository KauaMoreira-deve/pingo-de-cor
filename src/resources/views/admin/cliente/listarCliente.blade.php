<div class="admin-card">
    <div class="admin-card-header">
        <div>
            <h2>Clientes</h2>
            <p>Gerenciamento de clientes cadastrados no sistema.</p>
        </div>
        <span class="admin-tag">{{ $listarCliente->count() }} registros</span>
    </div>

    <div class="admin-filter-row">
        <div class="admin-search-fake" aria-label="Busca de cliente">
            <span aria-hidden="true">&#128269;</span> Buscar cliente...
        </div>
        <div class="admin-filter-fake" aria-label="Filtros de cliente">
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
                    <th scope="col">Status</th>
                    <th scope="col">Atualizado em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listarCliente as $cliente)
                    <tr>
                        <td>
                            <img class="cell-image" 
                                 src="{{ asset('storage/' . data_get($cliente, 'foto_cliente')) }}"
                                 alt="Foto de {{ data_get($cliente, 'nome_cliente') }}" 
                                 loading="lazy">
                        </td>
                        <td><span class="cell-primary">{{ data_get($cliente, 'nome_cliente') }}</span></td>
                        <td>{{ data_get($cliente, 'email_cliente') }}</td>
                        <td>
                            <span class="admin-status {{ strtolower(data_get($cliente, 'status_cliente')) === 'ativo' ? 'published' : 'draft' }}">
                                {{ data_get($cliente, 'status_cliente') }}
                            </span>
                        </td>
                        <td>{{ \Carbon\Carbon::parse(data_get($cliente, 'data_atualizacao_cliente'))->format('d/m/Y H:i') }}</td>
                        <td>
                            <button type="button" class="admin-action">Editar</button>
                        </td>
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