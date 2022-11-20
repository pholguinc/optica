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

            @if($roles->count())
            @foreach($roles as $role)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $role->name }}</td>
                <td data-title="Acciones" width="175px" class="text-center">

                    <a wire:click="Edit({{ $role->id }})" class="btn bg-primary-400 btn-md rounded" label="Open Modal" data-toggle="modal" data-target="#EditRole">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a wire:click="$emit('deleteRole', {{ $role->id }})" class="btn bg-danger-400 btn-md text-white">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @else
                <tr class="odd text-center">
                    <td valign="top" colspan="3" class="dataTables_empty">No existe ningún
                        registro con su búsqueda</td>
                </tr>
            @endif

        </tbody>

    </table>

</div>
