<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th rowspan="1" colspan="1">#</th>
            <th rowspan="1" colspan="1">Nombres</th>
            <th rowspan="1" colspan="1">Descripción</th>
            <th rowspan="1" colspan="1">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($categories->count())
            @foreach ($categories as $category)
                <tr>
                    <td width="80px">{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td width="175px" class="text-center">
                        <a wire:click="Edit({{ $category->id }})" class="btn bg-primary-400 btn-md rounded" label="Open Modal" data-toggle="modal" data-target="#EditCategory">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a wire:click="$emit('deleteCategory', {{ $category->id }})" class="btn bg-danger-400 btn-md text-white">
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
