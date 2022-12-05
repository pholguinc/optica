<div class="table-responsive">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th width="10px">#</th>
                    <th width="10px">Imagen</th>
                    <th width="500px">Nombre</th>
                    <th width="150px">Código</th>
                    <th width="450px">Categoría</th>
                    <th width="350px" class="text-center">Precio</th>
                    <th width="250px" class="text-center">Stock</th>
                    <th width="250px" class="text-center">Inv. Min</th>
                    <th width="450px">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @if ($products->count())
                @foreach ($products as $product)
                <tr>
                    <td width="5px">
                        <h6 class="mt-4">
                            {{ $loop->iteration }}
                        </h6>
                    </td>
                    <td>
                        <div class="d-flex align-items-center"><img class="rounded-circle" src="{{ asset('storage/products/'. $product->image ) }}" width="80"></div>
                    </td>
                    <td>
                        <h6 class="mt-4">{{ $product->name }}</h6>
                    </td>
                    <td>
                        <h6 class="mt-4">{{ $product->barcode }}</h6>
                    </td>
                    <td>
                        <h6 class="mt-4">{{ $product->category }}</h6>
                    </td>
                    <td>
                        <h6 class="mt-4 text-center">F{{ $product->price }}</h6>
                    </td>
                    <td>
                        <h6 class="mt-4 text-center">{{ $product->stock }}</h6>
                    </td>
                    <td>
                        <h6 class="mt-4 text-center">{{ $product->alerts }}</h6>
                    </td>
                    <td class="text-center">
                        <div class="mt-4">
                            <a wire:click="Edit({{ $product->id }})" class="text-white bg-blue-400 btn btn-md" data-toggle="modal" data-target="#EditProduct">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a wire:click="$emit('deleteProduct', {{ $product->id }})" class="text-white btn bg-danger-400 btn-md" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
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

</div>
