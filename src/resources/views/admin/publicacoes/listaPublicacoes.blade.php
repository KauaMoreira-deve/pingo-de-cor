```blade
<main class="app-main">

    <!--begin::App Content Header-->
    <div class="app-content-header">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6">
                    <h1 class="mb-0 fs-3">Publicações</h1>
                </div>

                <div class="col-sm-6">

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb float-sm-end">

                            <li class="breadcrumb-item">
                                
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">
                                Publicações
                            </li>

                        </ol>

                    </nav>

                </div>

            </div>


            {{-- ALERTA DE SUCESSO --}}
            @if (session('sucesso'))

                <div class="alert alert-success" role="alert">

                    <i class="bi bi-check-circle-fill"></i>

                    {{ session('sucesso') }}

                </div>

            @endif


            {{-- ALERTA DE ERRO --}}
            @if (session('erro'))

                <div class="alert alert-danger" role="alert">

                    <i class="bi bi-exclamation-circle-fill"></i>

                    {{ session('erro') }}

                </div>

            @endif

        </div>

    </div>
    <!--end::App Content Header-->


    <!--begin::App Content-->
    <div class="app-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <!--begin::Card-->
                    <div class="card mb-4">


                        <!--begin::Card Header-->
                        <div class="card-header">

                            <div class="row g-2 align-items-center">

                                <div class="col-12 col-md-4">

                                    <h3 class="card-title">
                                        Publicações cadastradas
                                    </h3>

                                </div>


                                <div class="col-12 col-md-8">

                                    <div class="d-flex flex-wrap justify-content-md-end gap-2">


                                        {{-- BUSCA --}}
                                        <div class="input-group input-group-sm w-auto">

                                            <span class="input-group-text">

                                                <i class="bi bi-search" aria-hidden="true"></i>

                                            </span>

                                            <input
                                                type="search"
                                                id="publicacao-search"
                                                class="form-control"
                                                placeholder="Pesquisar publicações"
                                                aria-label="Pesquisar publicações"
                                                style="width: 180px"
                                            />

                                        </div>


                                        {{-- FILTRO --}}
                                        <select
                                            id="publicacao-status-filter"
                                            class="form-select form-select-sm w-auto"
                                            aria-label="Filtrar publicações"
                                        >

                                            <option value="all" selected>
                                                Todos
                                            </option>

                                            <option value="ativo">
                                                Publicados
                                            </option>

                                            <option value="inativo">
                                                Rascunhos
                                            </option>

                                        </select>


                                        {{-- NOVA PUBLICAÇÃO --}}
                                        <button
                                            type="button"
                                            class="btn btn-sm btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modal-add-publicacao"
                                        >

                                            <i
                                                class="bi bi-plus-circle-fill me-1"
                                                aria-hidden="true"
                                            ></i>

                                            Nova publicação

                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!--end::Card Header-->


                        <!--begin::Card Body-->
                        <div class="card-body p-0">

                            <div class="table-responsive">

                                <table class="table table-hover align-middle m-0">

                                    <thead>

                                        <tr>

                                            <th>
                                                Código
                                            </th>

                                            <th>
                                                Título
                                            </th>

                                            <th>
                                                Conteúdo
                                            </th>

                                            <th>
                                                Categoria
                                            </th>

                                            <th>
                                                Status
                                            </th>

                                            <th>
                                                Atualizado
                                            </th>

                                            <th class="text-end">
                                                Ações
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        @forelse($listaPublicacoes as $publicacao)

                                            <tr>

                                                {{-- ID --}}
                                                <td>
                                                    {{ $publicacao->id_publicacao }}
                                                </td>


                                                {{-- TÍTULO --}}
                                                <td>

                                                    <span class="badge text-table">

                                                        {{ $publicacao->titulo_publicacao }}

                                                    </span>

                                                </td>


                                                {{-- CONTEÚDO --}}
                                                <td>

                                                    {{ \Illuminate\Support\Str::limit(
                                                        $publicacao->descricao_publicacao,
                                                        80
                                                    ) }}

                                                </td>


                                                {{-- CATEGORIA --}}
                                                <td>

                                                    {{ $publicacao->categoria_publicacao ?? '-' }}

                                                </td>


                                                {{-- STATUS --}}
                                                <td>

                                                    @if ($publicacao->status_publicacao === 'ATIVO')

                                                        <span class="badge text-bg-success">
                                                            Publicado
                                                        </span>

                                                    @else

                                                        <span class="badge text-bg-warning">
                                                            Rascunho
                                                        </span>

                                                    @endif

                                                </td>


                                                {{-- ATUALIZADO --}}
                                                <td>

                                                    {{ $publicacao->updated_at
                                                        ? $publicacao->updated_at->format('d/m/Y')
                                                        : '-'
                                                    }}

                                                </td>


                                                {{-- AÇÕES --}}
                                                <td class="text-end">

                                                    <div class="btn-group btn-group-sm">


                                                        {{-- EDITAR --}}
                                                        <button
                                                            type="button"
                                                            class="btn btn-outline-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-edit-publicacao"

                                                            data-id="{{ $publicacao->id_publicacao }}"

                                                            data-titulo="{{ $publicacao->titulo_publicacao }}"

                                                            data-descricao="{{ $publicacao->descricao_publicacao }}"

                                                            data-categoria="{{ $publicacao->categoria_publicacao }}"

                                                            data-status="{{ $publicacao->status_publicacao }}"

                                                          
                                                            aria-label="Editar"
                                                        >

                                                            <i
                                                                class="bi bi-pencil"
                                                                aria-hidden="true"
                                                            ></i>

                                                        </button>


                                                        {{-- ATIVAR / DESATIVAR --}}
                                                        <form
                                                            
                                                            method="POST"
                                                            class="d-inline"
                                                        >

                                                            @csrf

                                                            @method('PATCH')


                                                            @if ($publicacao->status_publicacao === 'ATIVO')

                                                                <button
                                                                    type="button"
                                                                    class="btn btn-outline-danger"

                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-status-publicacao"

                                                                    data-url="{{ route(
                                                                        'admin.publicacao.status',
                                                                        $publicacao->id_publicacao
                                                                    ) }}"

                                                                    data-titulo="{{ $publicacao->titulo_publicacao }}"

                                                                    data-status="ATIVO"

                                                                    title="Desativar publicação"

                                                                    aria-label="Desativar"
                                                                >

                                                                    <i
                                                                        class="bi bi-eye-fill"
                                                                        aria-hidden="true"
                                                                    ></i>

                                                                </button>

                                                            @else

                                                                <button
                                                                    type="button"
                                                                    class="btn btn-outline-success"

                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-status-publicacao"

                                                                    data-url="{{ route(
                                                                        'admin.publicacao.status',
                                                                        $publicacao->id_publicacao
                                                                    ) }}"

                                                                    data-titulo="{{ $publicacao->titulo_publicacao }}"

                                                                    data-status="INATIVO"

                                                                    title="Publicar"

                                                                    aria-label="Publicar"
                                                                >

                                                                    <i
                                                                        class="bi bi-eye-slash"
                                                                        aria-hidden="true"
                                                                    ></i>

                                                                </button>

                                                            @endif

                                                        </form>

                                                    </div>

                                                </td>

                                            </tr>


                                        @empty

                                            <tr>

                                                <td
                                                    colspan="7"
                                                    class="text-center py-4 text-muted"
                                                >

                                                    Nenhuma publicação cadastrada.

                                                </td>

                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                        </div>
                        <!--end::Card Body-->


                        <!--begin::Card Footer-->
                        <div class="card-footer clearfix">

                            <div class="float-start pt-1 fs-7 text-body-secondary">

                                Total de publicações:

                                <strong>
                                    {{ $listarPublicacao->count() }}
                                </strong>

                            </div>


                            <ul class="pagination pagination-sm m-0 float-end">

                                <li class="page-item disabled">

                                    <a
                                        class="page-link"
                                        href="#"
                                        aria-label="Previous"
                                    >
                                        &laquo;
                                    </a>

                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>

                                <li class="page-item">

                                    <a
                                        class="page-link"
                                        href="#"
                                        aria-label="Next"
                                    >
                                        &raquo;
                                    </a>

                                </li>

                            </ul>

                        </div>
                        <!--end::Card Footer-->

                    </div>
                    <!--end::Card-->

                </div>

            </div>


            {{-- ====================================================== --}}
            {{-- MODAL CADASTRAR PUBLICAÇÃO --}}
            {{-- ====================================================== --}}

            <div
                class="modal fade"
                id="modal-add-publicacao"
                tabindex="-1"
                aria-hidden="true"
            >

                <div class="modal-dialog">

                    <div class="modal-content">


                        <form
                            action="{{ route('admin.publicacao.store') }}"
                            method="POST"
                        >

                            @csrf


                            <div class="modal-header">

                                <h5 class="modal-title">
                                    Cadastrar nova publicação
                                </h5>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>

                            </div>


                            <div class="modal-body">


                                {{-- TÍTULO --}}
                                <div class="mb-3">

                                    <label
                                        for="new-publicacao-titulo"
                                        class="form-label"
                                    >
                                        Título
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="new-publicacao-titulo"
                                        name="titulo_publicacao"
                                        placeholder="Digite o título da publicação"
                                        required
                                    >

                                </div>


                                {{-- DESCRIÇÃO --}}
                                <div class="mb-3">

                                    <label
                                        for="new-publicacao-descricao"
                                        class="form-label"
                                    >
                                        Conteúdo
                                    </label>

                                    <textarea
                                        class="form-control"
                                        id="new-publicacao-descricao"
                                        name="descricao_publicacao"
                                        rows="5"
                                        placeholder="Digite o conteúdo da publicação"
                                        required
                                    ></textarea>

                                </div>


                                {{-- CATEGORIA --}}
                                <div class="mb-3">

                                    <label
                                        for="new-publicacao-categoria"
                                        class="form-label"
                                    >
                                        Categoria
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="new-publicacao-categoria"
                                        name="categoria_publicacao"
                                        placeholder="Ex.: Notícias"
                                    >

                                </div>


                                {{-- STATUS --}}
                                <div class="mb-3">

                                    <label
                                        for="new-publicacao-status"
                                        class="form-label"
                                    >
                                        Status
                                    </label>

                                    <select
                                        id="new-publicacao-status"
                                        class="form-select"
                                        name="status_publicacao"
                                    >

                                        <option value="ATIVO">
                                            Publicado
                                        </option>

                                        <option value="INATIVO">
                                            Rascunho
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <div class="modal-footer">

                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Cancelar
                                </button>

                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    Salvar
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>


            {{-- ====================================================== --}}
            {{-- MODAL EDITAR PUBLICAÇÃO --}}
            {{-- ====================================================== --}}

            <div
                class="modal fade"
                id="modal-edit-publicacao"
                tabindex="-1"
                aria-hidden="true"
            >

                <div class="modal-dialog">

                    <div class="modal-content">


                        <form
                            id="form-edit-publicacao"
                            method="POST"
                        >

                            @csrf
                            @method('PATCH')


                            <div class="modal-header">

                                <h5 class="modal-title">
                                    Editar publicação
                                </h5>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>

                            </div>


                            <div class="modal-body">


                                <div class="mb-3">

                                    <label
                                        for="edit-publicacao-titulo"
                                        class="form-label"
                                    >
                                        Título
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="edit-publicacao-titulo"
                                        name="titulo_publicacao"
                                        required
                                    >

                                </div>


                                <div class="mb-3">

                                    <label
                                        for="edit-publicacao-descricao"
                                        class="form-label"
                                    >
                                        Conteúdo
                                    </label>

                                    <textarea
                                        class="form-control"
                                        id="edit-publicacao-descricao"
                                        name="descricao_publicacao"
                                        rows="5"
                                        required
                                    ></textarea>

                                </div>


                                <div class="mb-3">

                                    <label
                                        for="edit-publicacao-categoria"
                                        class="form-label"
                                    >
                                        Categoria
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="edit-publicacao-categoria"
                                        name="categoria_publicacao"
                                    >

                                </div>


                                <div class="mb-3">

                                    <label
                                        for="edit-publicacao-status"
                                        class="form-label"
                                    >
                                        Status
                                    </label>

                                    <select
                                        id="edit-publicacao-status"
                                        class="form-select"
                                        name="status_publicacao"
                                    >

                                        <option value="ATIVO">
                                            Publicado
                                        </option>

                                        <option value="INATIVO">
                                            Rascunho
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <div class="modal-footer">

                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Cancelar
                                </button>

                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    Atualizar publicação
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>


            {{-- ====================================================== --}}
            {{-- MODAL ALTERAR STATUS --}}
            {{-- ====================================================== --}}

            <div
                class="modal fade"
                id="modal-status-publicacao"
                tabindex="-1"
                aria-hidden="true"
            >

                <div class="modal-dialog">

                    <div class="modal-content">


                        <form
                            id="form-status-publicacao"
                            method="POST"
                        >

                            @csrf
                            @method('PATCH')


                            <div class="modal-header">

                                <h5
                                    class="modal-title"
                                    id="modal-status-publicacao-titulo"
                                >
                                    Alterar status da publicação
                                </h5>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>

                            </div>


                            <div class="modal-body">

                                <p
                                    class="mb-0"
                                    id="modal-status-publicacao-txt"
                                ></p>

                            </div>


                            <div class="modal-footer">

                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Cancelar
                                </button>

                                <button
                                    type="submit"
                                    class="btn btn-danger"
                                    id="btn-status-publicacao"
                                >
                                    Confirmar
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!--end::App Content-->

</main>


{{-- ====================================================== --}}
{{-- EDITAR PUBLICAÇÃO --}}
{{-- ====================================================== --}}

<script>

    const modalEditarPublicacao =
        document.getElementById('modal-edit-publicacao');

    const formEditPublicacao =
        document.getElementById('form-edit-publicacao');

    const editTitulo =
        document.getElementById('edit-publicacao-titulo');

    const editDescricao =
        document.getElementById('edit-publicacao-descricao');

    const editCategoria =
        document.getElementById('edit-publicacao-categoria');

    const editStatus =
        document.getElementById('edit-publicacao-status');


    modalEditarPublicacao.addEventListener(
        'show.bs.modal',
        function(event) {

            const botao = event.relatedTarget;

            const titulo =
                botao.getAttribute('data-titulo');

            const descricao =
                botao.getAttribute('data-descricao');

            const categoria =
                botao.getAttribute('data-categoria');

            const status =
                botao.getAttribute('data-status');

            const url =
                botao.getAttribute('data-url');


            formEditPublicacao.action = url;

            editTitulo.value = titulo;

            editDescricao.value = descricao;

            editCategoria.value = categoria;

            editStatus.value = status;

        }
    );

</script>


{{-- ====================================================== --}}
{{-- ALTERAR STATUS --}}
{{-- ====================================================== --}}

<script>

    const modalStatusPublicacao =
        document.getElementById('modal-status-publicacao');

    const formStatusPublicacao =
        document.getElementById('form-status-publicacao');

    const tituloStatusPublicacao =
        document.getElementById('modal-status-publicacao-titulo');

    const txtStatusPublicacao =
        document.getElementById('modal-status-publicacao-txt');

    const btnStatusPublicacao =
        document.getElementById('btn-status-publicacao');


    modalStatusPublicacao.addEventListener(
        'show.bs.modal',
        function(event) {

            const botao = event.relatedTarget;


            const url =
                botao.getAttribute('data-url');

            const titulo =
                botao.getAttribute('data-titulo');

            const status =
                botao.getAttribute('data-status');


            formStatusPublicacao.action = url;


            if (status === 'ATIVO') {

                tituloStatusPublicacao.textContent =
                    'Desativar publicação';

                txtStatusPublicacao.textContent =
                    'Tem certeza de que deseja colocar esta publicação como rascunho?';

                btnStatusPublicacao.textContent =
                    'Desativar';

                btnStatusPublicacao.className =
                    'btn btn-danger';

            } else {

                tituloStatusPublicacao.textContent =
                    'Publicar publicação';

                txtStatusPublicacao.textContent =
                    'Tem certeza de que deseja publicar esta publicação?';

                btnStatusPublicacao.textContent =
                    'Publicar';

                btnStatusPublicacao.className =
                    'btn btn-success';

            }

        }
    );

</script>


{{-- ====================================================== --}}
{{-- FECHAR ALERTAS AUTOMATICAMENTE --}}
{{-- ====================================================== --}}

<script>

    setTimeout(() => {

        const alertas =
            document.querySelectorAll('.alert');

        alertas.forEach(function(alerta) {

            const instancia =
                bootstrap.Alert.getOrCreateInstance(alerta);

            instancia.close();

        });

    }, 5000);

</script>
```
