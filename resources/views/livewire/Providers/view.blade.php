<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th rowspan="1" colspan="1">#</th>
                <th rowspan="1" colspan="1">Nombres</th>
                <th rowspan="1" colspan="1">Dirección</th>
                <th rowspan="1" colspan="1">Contacto</th>
                <th rowspan="1" colspan="1">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($providers as $provider)
                <tr>
                    <td width="10px">
                        {{ $loop->iteration }}
                    </td>
                    <td width="200px">
                        {{ $provider->name }}
                    </td>
                    <td width="400px">
                        {{ $provider->address }}
                    </td>
                    <td width="150px">
                        <div class="mt-3 text-center">
                            <a>
                                <i class="fas fa-phone-alt text-secondary"></i>
                                <span>{{ $provider->phone }}</span>
                            </a>
                        </div>
                    </td>
                    <td id="actions" data-title="Acciones" width="175px" class="text-center">

                        <a wire:click="Edit({{ $provider->id }})" class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#EditProvider">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a wire:click="$emit('deleteProvider', {{ $provider->id }})" class="text-white btn bg-danger-400 btn-md">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

</div>
