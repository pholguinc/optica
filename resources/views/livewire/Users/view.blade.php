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
                <td data-title="Acciones" width="175px" class="text-center">

                    <a wire:click="Edit({{ $user->id }})" class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#EditUser">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a wire:click="$emit('deleteUser', {{ $user->id }})" class="text-white btn bg-danger-400 btn-md">
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
