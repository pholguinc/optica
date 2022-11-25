<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Paciente</th>
                <th>Empleado</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @if ($queries->count())
            @foreach($queries as $query)
            <tr>
                <td data-title="#" width="80px">{{ $loop->iteration }}</td>
                <td data-title="Codigo">{{ $query->code }}</td>
                <td data-title="Paciente">{{ $query->patient->name }}</td>
                <td data-title="Empleado">{{ $query->user->name }}</td>
                <td id="status" data-title="Estado" width="135px">
                    <button type="button" class="text-white btn bg-danger-400 btn-md">
                        <span>Inactivo</span>
                        <i class="ml-2 fa fa-window-close"></i>
                    </button>
                </td>
                <td id="actions" data-title="Acciones" width="175px" class="text-center">
                    <a href="" class="text-white btn bg-info-400 btn-md" data-toggle="tooltip" data-placement="top" title="Ver">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="" class="text-white bg-blue-400 btn btn-md" data-toggle="tooltip" data-placement="top" title="Editar">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="" class="text-white btn bg-danger-400 btn-md" data-toggle="tooltip" data-placement="top" title="Eliminar">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="text-center odd">
                <td valign="top" colspan="8">No matching records found</td>
            </tr>
            @endif

        </tbody>


    </table>

</div>
