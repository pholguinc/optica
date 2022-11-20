<div class="table-responsive" id="no-more-tables">
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
                        <td data-title="#" width="80px">{{ $loop->iteration }}</td>
                        <td data-title="Nombres">{{ $user->name }}</td>
                        <td data-title="Usuario">{{ $user->username }}</td>
                        <td data-title="Teléfono">{{ $user->phone }}</td>
                        <td id="status" data-title="Estado" width="135px">
                            <button type="button" class="btn bg-danger-400 btn-md text-white">
                                <span>Inactivo</span>
                                <i class="fa fa-window-close ml-2"></i>
                            </button>
                        </td>
                        <td data-title="Rol">
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $rolName)
                                    <span>{{ $rolName }}</span>
                                @endforeach
                            @endif
                        </td>
                        <td id="actions" data-title="Acciones" width="175px" class="text-center">
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

</div>
