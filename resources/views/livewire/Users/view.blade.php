<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th rowspan="1" colspan="1">#</th>
            <th rowspan="1" colspan="1">Nombres</th>
            <th rowspan="1" colspan="1">Usuario</th>
            <th rowspan="1" colspan="1">Teléfono</th>
            <th rowspan="1" colspan="1">Estado</th>
            <th rowspan="1" colspan="1">Rol</th>
            <th rowspan="1" colspan="1">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($users->count())
            @foreach ($users as $user)
                <tr>
                    <td width="80px">{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->phone }}</td>
                    <td width="135px">
                        <button type="button" class="btn bg-danger-400 btn-md text-white">
                            <span>Inactivo</span>
                            <i class="fa fa-window-close ml-2"></i>
                        </button>
                    </td>
                    <td>Rol</td>
                    <td width="175px" class="text-center">
                        <a href="" class="btn bg-info-400 btn-md text-white" data-toggle="tooltip"
                            data-placement="top" title="Ver">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="" class="btn bg-blue-400 btn-md text-white" data-toggle="tooltip"
                            data-placement="top" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="" class="btn bg-danger-400 btn-md text-white" data-toggle="tooltip"
                            data-placement="top" title="Eliminar">
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
