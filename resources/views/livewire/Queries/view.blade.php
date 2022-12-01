<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Paciente</th>
                <th>Optometro(a)</th>
                <th>Fecha</th>
                <th>COntrol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @if ($queries->count())
            @foreach($queries as $query)
            <tr>
                <td data-title="#" width="80px">{{ $loop->iteration }}</td>
                <td data-title="Paciente">{{-- $query->patient->name --}}</td>
                <td data-title="Optometro">{{-- $query->user->name --}}</td>
                <td data-title="Control" width="135px">
                    {{ $query->control }}
                </td>
                <td data-title="Fecha" width="135px">
                    {{ $query->created_at->format('d-m-Y') }}
                </td>
                <td id="actions" data-title="Acciones" width="175px" class="text-center">
                    <a href="" class="text-white btn bg-info-400 btn-md" data-toggle="tooltip" data-placement="top" title="Ver">
                        <i class="fas fa-clipboard"></i>
                    </a>

                    <a wire:click="Edit({{ $query->id }})" class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#EditQuery">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a wire:click="$emit('deleteQuery', {{ $query->id }})" class="text-white btn bg-danger-400 btn-md">
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

