<main class="app-main">

    <!-- Cabeçalho -->
    <div class="app-content-header">
        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6">
                    <h1 class="mb-0 fs-3">Orçamentos</h1>
                </div>

                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb float-sm-end">

                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>

                            <li class="breadcrumb-item active">
                                Orçamentos
                            </li>

                        </ol>

                    </nav>
                </div>

            </div>

        </div>
    </div>


    <!-- Conteúdo -->
    <div class="app-content">

        <div class="container-fluid">

            <!-- Mensagem de sucesso -->
            @if(session('sucesso'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    {{ session('sucesso') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>

                </div>
            @endif


            <!-- Mensagem de erro -->
            @if(session('erro'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">

                    {{ session('erro') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>

                </div>
            @endif


            <!-- Card -->
            <div class="card">

                <div class="card-header">

                    <h3 class="card-title mb-0">
                        Lista de Orçamentos
                    </h3>

                </div>


                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">

                            <thead>

                                <tr>

                                    <th>ID</th>

                                    <th>Contato</th>

                                    <th>Título</th>

                                    <th>Valor</th>

                                    <th>Prazo</th>

                                    <th>Status</th>

                                    <th>Data de criação</th>

                                    <th>Ações</th>

                                </tr>

                            </thead>


                            <tbody>

                                @forelse($listaOrcamento as $orcamento)

                                    <tr>

                                        <td>
                                            {{ $orcamento->id_orcamento }}
                                        </td>

                                        <td>
                                            {{ $orcamento->id_contato }}
                                        </td>

                                        <td>
                                            {{ $orcamento->titulo_orcamento }}
                                        </td>

                                        <td>
                                            R$
                                            {{ number_format($orcamento->valor_total_orcamento, 2, ',', '.') }}
                                        </td>

                                        <td>
                                            {{ $orcamento->prazo_execucao_orcamento }}
                                        </td>

                                        <td>

                                            @if($orcamento->status_orcamento == 'Aprovado')

                                                <span class="badge text-bg-success">
                                                    Aprovado
                                                </span>

                                            @elseif($orcamento->status_orcamento == 'Pendente')

                                                <span class="badge text-bg-warning">
                                                    Pendente
                                                </span>

                                            @else

                                                <span class="badge text-bg-secondary">
                                                    Análise
                                                </span>

                                            @endif

                                        </td>

                                        <td>
                                            {{ date('d/m/Y H:i', strtotime($orcamento->data_criacao_orcamento)) }}
                                        </td>

                                        <td>

                                            <!-- EDITAR -->
                                            <button type="button"
                                                    class="btn btn-sm btn-warning"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalEditar{{ $orcamento->id_orcamento }}">

                                                Editar

                                            </button>


                                            <!-- EXCLUIR -->
                                            <button type="button"
                                                    class="btn btn-sm btn-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalExcluir{{ $orcamento->id_orcamento }}">

                                                Excluir

                                            </button>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="8" class="text-center">

                                            Nenhum orçamento cadastrado.

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- ===================================================== -->
<!-- MODAL: NOVO ORÇAMENTO -->
<!-- ===================================================== -->

<div class="modal fade"
     id="modalNovoOrcamento"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form action="{{ route('admin.orcamento.store') }}"
                  method="POST">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        Novo Orçamento
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>


                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-4 mb-3">

                            <label class="form-label">
                                ID do Contato
                            </label>

                            <input type="number"
                                   name="id_contato"
                                   class="form-control"
                                   required>

                        </div>


                        <div class="col-md-8 mb-3">

                            <label class="form-label">
                                Título do Orçamento
                            </label>

                            <input type="text"
                                   name="titulo_orcamento"
                                   class="form-control"
                                   required>

                        </div>


                        <div class="col-md-4 mb-3">

                            <label class="form-label">
                                Valor Total
                            </label>

                            <input type="number"
                                   name="valor_total_orcamento"
                                   class="form-control"
                                   step="0.01"
                                   min="0"
                                   required>

                        </div>


                        <div class="col-md-4 mb-3">

                            <label class="form-label">
                                Prazo de Execução
                            </label>

                            <input type="text"
                                   name="prazo_execucao_orcamento"
                                   class="form-control"
                                   placeholder="Ex: 45 dias"
                                   required>

                        </div>


                        <div class="col-md-4 mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select name="status_orcamento"
                                    class="form-select"
                                    required>

                                <option value="Pendente">
                                    Pendente
                                </option>

                                <option value="Aprovado">
                                    Aprovado
                                </option>

                                <option value="Analise">
                                    Análise
                                </option>

                            </select>

                        </div>


                        <div class="col-12 mb-3">

                            <label class="form-label">
                                Observações
                            </label>

                            <textarea name="observacoes_orcamento"
                                      class="form-control"
                                      rows="4"></textarea>

                        </div>

                    </div>

                </div>


                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">

                        Cancelar

                    </button>

                    <button type="submit"
                            class="btn btn-primary">

                        Salvar Orçamento

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- ===================================================== -->
<!-- MODAIS DE EDITAR E EXCLUIR -->
<!-- ===================================================== -->

@foreach($listaOrcamento as $orcamento)

    <!-- MODAL EDITAR -->

    <div class="modal fade"
         id="modalEditar{{ $orcamento->id_orcamento }}"
         tabindex="-1"
         aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <form action="{{ route('admin.orcamento.update', $orcamento->id_orcamento) }}"
                      method="POST">

                    @csrf

                    @method('PUT')

                    <div class="modal-header">

                        <h5 class="modal-title">
                            Editar Orçamento
                        </h5>

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                        </button>

                    </div>


                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    ID do Contato
                                </label>

                                <input type="number"
                                       name="id_contato"
                                       class="form-control"
                                       value="{{ $orcamento->id_contato }}"
                                       required>

                            </div>


                            <div class="col-md-8 mb-3">

                                <label class="form-label">
                                    Título do Orçamento
                                </label>

                                <input type="text"
                                       name="titulo_orcamento"
                                       class="form-control"
                                       value="{{ $orcamento->titulo_orcamento }}"
                                       required>

                            </div>


                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Valor Total
                                </label>

                                <input type="number"
                                       name="valor_total_orcamento"
                                       class="form-control"
                                       step="0.01"
                                       min="0"
                                       value="{{ $orcamento->valor_total_orcamento }}"
                                       required>

                            </div>


                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Prazo de Execução
                                </label>

                                <input type="text"
                                       name="prazo_execucao_orcamento"
                                       class="form-control"
                                       value="{{ $orcamento->prazo_execucao_orcamento }}"
                                       required>

                            </div>


                            <div class="col-md-4 mb-3">

                                <label class="form-label">
                                    Status
                                </label>

                                <select name="status_orcamento"
                                        class="form-select"
                                        required>

                                    <option value="Pendente"
                                        {{ $orcamento->status_orcamento == 'Pendente' ? 'selected' : '' }}>
                                        Pendente
                                    </option>

                                    <option value="Aprovado"
                                        {{ $orcamento->status_orcamento == 'Aprovado' ? 'selected' : '' }}>
                                        Aprovado
                                    </option>

                                    <option value="Analise"
                                        {{ $orcamento->status_orcamento == 'Analise' ? 'selected' : '' }}>
                                        Análise
                                    </option>

                                </select>

                            </div>


                            <div class="col-12 mb-3">

                                <label class="form-label">
                                    Observações
                                </label>

                                <textarea name="observacoes_orcamento"
                                          class="form-control"
                                          rows="4">{{ $orcamento->observacoes_orcamento }}</textarea>

                            </div>

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">

                            Cancelar

                        </button>

                        <button type="submit"
                                class="btn btn-primary">

                            Salvar alterações

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <!-- MODAL EXCLUIR -->

    <div class="modal fade"
         id="modalExcluir{{ $orcamento->id_orcamento }}"
         tabindex="-1"
         aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <form action="{{ route('admin.orcamento.destroy', $orcamento->id_orcamento) }}"
                      method="POST">

                    @csrf

                    @method('DELETE')

                    <div class="modal-header">

                        <h5 class="modal-title">
                            Excluir Orçamento
                        </h5>

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                        </button>

                    </div>


                    <div class="modal-body">

                        <p class="mb-0">

                            Tem certeza que deseja excluir o orçamento:

                            <strong>
                                {{ $orcamento->titulo_orcamento }}
                            </strong>?

                        </p>

                        <p class="text-muted mt-2 mb-0">

                            Essa ação não poderá ser desfeita.

                        </p>

                    </div>


                    <div class="modal-footer">

                        <button type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">

                            Cancelar

                        </button>

                        <button type="submit"
                                class="btn btn-danger">

                            Excluir

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endforeach