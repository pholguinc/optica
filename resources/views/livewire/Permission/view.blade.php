<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @if ($permissions->count())
                @foreach ($permissions as $permission)
                <tr>
                    <td data-title="#" width="30px">{{ $loop->iteration }}</td>
                    <td data-title="#" width="30px">{{ $permission->name }}</td>
                    <td data-title="Acciones" width="175px" class="text-center">

                        <a wire:click="Edit({{ $permission->id }})" class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#EditPermission">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a wire:click="$emit('deletePermission', {{ $permission->id }})" class="text-white btn bg-danger-400 btn-md">
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
