<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th rowspan="1" colspan="1">#</th>
                <th rowspan="1" colspan="1">Nombres</th>
                <th rowspan="1" colspan="1">Apellidos</th>
                <th rowspan="1" colspan="1">Teléfono</th>
                <th rowspan="1" colspan="1">Correo</th>
                <th rowspan="1" colspan="1">DNI</th>
                <th rowspan="1" colspan="1">Estado</th>
                <th rowspan="1" colspan="1">Rol</th>
                <th rowspan="1" colspan="1">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if ($users->count())
            @foreach ($users as $user)
            <tr>
                <td data-title="#" width="30px">{{ $loop->iteration }}</td>
                <td data-title="Nombres">{{ $user->name }}</td>
                <td data-title="Apellidos">{{ $user->lastname }}</td>
                <td data-title="Teléfono">{{ $user->phone }}</td>
                <td data-title="Teléfono">{{ $user->email }}</td>
                <td data-title="DNI">{{ $user->dni }}</td>
                <td id="status" data-title="Estado" width="135px">
                    @if ($user->status == 'Activo')
                        <button type="button" class="btn bg-danger-400 btn-md text-white">
                            <span>Inactivo</span>
                            <i class="fa fa-window-close ml-2"></i>
                        </button>
                    @else
                        <button type="button" class="btn bg-success-400 btn-md text-white">
                            <span>Activo</span>
                            <i class="fa fa-check ml-2"></i>
                        </button>
                    @endif
                </td>
                <td data-title="Rol">
                    Administrador
                </td>
                <td data-title="Acciones" width="175px" class="text-center">

                    <a class="btn bg-info-400 btn-md rounded text-white" label="Open Modal" data-toggle="modal" data-target="#modalPermissions">
                        <i class="fas fa-key"></i>
                    </a>

                    <a class="btn bg-primary-400 btn-md rounded" label="Open Modal" data-toggle="modal" data-target="#EditUser">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn bg-danger-400 btn-md text-white">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10" class="text-center font-weight-bold">No hay registros con su búsqueda</td>
            </tr>
            @endif

        </tbody>

    </table>

</div>
