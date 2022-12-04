<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th rowspan="1" colspan="1">#</th>
            <th rowspan="1" colspan="1">Imagen</th>
            <th rowspan="1" colspan="1">Nombre</th>
            <th rowspan="1" colspan="1">Código</th>
            <th rowspan="1" colspan="1">Categoría</th>
            <th rowspan="1" colspan="1">Precio</th>
            <th rowspan="1" colspan="1">Estado</th>
            <th rowspan="1" colspan="1">Inv. Min</th>
            <th rowspan="1" colspan="1">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($products->count())
            @foreach ($products as $product)
                <tr>
                    <td width="80px">{{ $loop->iteration }}</td>
                    <td>
                        <span>
                            <img src="{{ asset('storage/products/'.$product->image) }}" alt="" height="70" width="80" class="rounded">
                        </span>
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->barcode }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price}}</td>
                    <td>{{ $product->stock}}</td>
                    <td>{{ $product->alerts}}</td>
                    <td width="175px" class="text-center">
                        <a href="" class="text-white btn bg-info-400 btn-md" data-toggle="tooltip"
                            data-placement="top" title="Ver">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="" class="text-white bg-blue-400 btn btn-md" data-toggle="tooltip"
                            data-placement="top" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="" class="text-white btn bg-danger-400 btn-md" data-toggle="tooltip"
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
