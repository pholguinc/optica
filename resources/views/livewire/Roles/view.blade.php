<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th rowspan="1" colspan="1">#</th>
                <th rowspan="1" colspan="1">Descripción</th>
                <th rowspan="1" colspan="1">Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach($roles as $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $role->name }}</td>
                    <td data-title="Acciones" width="175px" class="text-center">

                        <a href="" class="btn bg-blue-400 btn-md text-white" data-toggle="tooltip"
                            data-placement="top" title="Editar" wire:click="EditRole({{ $role->id }})">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="" class="btn bg-danger-400 btn-md text-white" data-toggle="tooltip"
                            data-placement="top" title="Eliminar" onclick="Confirm('{{ $role->id }}')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

</div>
