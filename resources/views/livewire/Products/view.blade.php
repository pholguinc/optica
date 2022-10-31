<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th rowspan="1" colspan="1">#</th>
            <th rowspan="1" colspan="1">Nombre</th>
            <th rowspan="1" colspan="1">Código</th>
            <th rowspan="1" colspan="1">Descripción</th>
            <th rowspan="1" colspan="1">Stock</th>
            <th rowspan="1" colspan="1">Estado</th>
            <th rowspan="1" colspan="1">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($products->count())
            @foreach ($products as $product)
                <tr>
                    <td width="80px">{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->barcode }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td width="135px">
                        <button type="button" class="btn bg-danger-400 btn-md text-white">
                            <span>Inactivo</span>
                            <i class="fa fa-window-close ml-2"></i>
                        </button>
                    </td>
                    <td width="175px" class="text-center">
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
