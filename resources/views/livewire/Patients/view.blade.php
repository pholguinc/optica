<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th rowspan="1" colspan="1">#</th>
            <th rowspan="1" colspan="1">Nombres</th>
            <th rowspan="1" colspan="1">Apellidos</th>
            <th rowspan="1" colspan="1">Teléfono</th>
            <th rowspan="1" colspan="1">E-mail</th>
            <th rowspan="1" colspan="1">DNI</th>
            <th rowspan="1" colspan="1">Fecha de Nacimiento</th>
            <th rowspan="1" colspan="1">Dirección</th>
            <th rowspan="1" colspan="1">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($patients->count())
            @foreach ($patients as $patient)
                <tr>
                    <td width="80px">{{ $loop->iteration }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->lastname}}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->dni }}</td>
                    <td>{{ $patient->date }}</td>
                    <td>{{ $patient->address }}</td>
                    <td data-title="Acciones" width="175px" class="text-center">

                        <a wire:click="Edit({{ $patient->id }})" class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#EditPatient">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a wire:click="$emit('deletePatient', {{ $patient->id }})" class="text-white btn bg-danger-400 btn-md">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="1" class="text-center font-weight-bold">No hay registros con su búsqueda</td>
            </tr>
        @endif
    </tbody>

</table>
