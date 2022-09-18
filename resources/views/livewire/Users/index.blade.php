<div>
    <div class="card card-outline card-primary-400">
        <div class="card-header p-0">
            <div>
                <ol class="breadcrumb mb-0 bg-white">
                    <li class="breadcrumb-item">
                        <i class="fas fa-home mr-2 text-secondary"></i>
                        <a href="/admin">
                            <span class="font-weight-bold text-blue-400">Inicio</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Lista de Usuarios</li>
                </ol>
            </div>
            <div class="border-top">
                <div class="container-fluid">
                    <div class="row mb-3 mt-3 p-2">
                        <div class="col-sm-6">

                            <div class="input-group">
                                <input class="form-control py-2 border-right-0 border" type="search"
                                    placeholder="Escriba para filtrar">
                                <span class="input-group-append">
                                    <div class="input-group-text bg-transparent"><i class="fa fa-search"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right" id="button-add">
                                <button class="btn bg-primary-400 btn-md rounded">
                                    <i class="fas fa-user-plus mr-2"></i>
                                    <span>Agregar Nuevo</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Cod</th>
                        <th>Nombres</th>
                        <th>Estado</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td width="140px">
                                <button type="button" class="btn bg-danger-400 btn-md text-white">
                                    <span>Inactivo</span>
                                    <i class="fa fa-window-close ml-2"></i>
                                </button>
                            </td>
                            <td width="140px">Rol</td>
                            <td width="175px" class="justify-center">
                                <a href="" class="btn bg-info-400 btn-md text-white" data-toggle="tooltip" data-placement="top" title="Ver">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="" class="btn bg-blue-400 btn-md text-white" data-toggle="tooltip" data-placement="top" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn bg-danger-400 btn-md text-white" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <div class="mt-4 mr-4">
            <div class="d-flex float-left ml-4">
                <button class="btn btn-md bg-success-400 text-white">
                    <i class="fas fa-file-excel"></i>
                    <span>Reportes Excel</span>
                </button>
                <button class="btn btn-md bg-danger-400 text-white ml-2">
                    <i class="fas fa-file-pdf"></i>
                    <span>Reportes PDF</span>
                </button>
                <button class="btn btn-md bg-grey-400 text-white ml-2">
                    <i class="fas fa-print"></i>
                    <span>Imprimir</span>
                </button>
            </div>
            <div class="float-right">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

@section('css')
    @vite('resources/css/colors.css')
    <style>
        @media (max-width: 575.98px) {
            #button-add{
                display:grid;
                margin-top: 10px;
            }
        }
        .tooltip { top: 0; }
    </style>
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
