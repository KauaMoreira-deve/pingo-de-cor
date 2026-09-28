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

            <!-- Card -->
            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">
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

                                            <a href="#"
                                               class="btn btn-sm btn-warning">
                                                Editar
                                            </a>

                                            <a href="#"
                                               class="btn btn-sm btn-danger">
                                                Excluir
                                            </a>

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