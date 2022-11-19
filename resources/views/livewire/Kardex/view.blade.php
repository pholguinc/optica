<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th rowspan="1" colspan="1">#</th>
                <th rowspan="1" colspan="1">Código</th>
                <th rowspan="1" colspan="1">Producto</th>
                <th rowspan="1" colspan="1">Unidades Ingresadas</th>
                <th rowspan="1" colspan="1">Costo de U. Ingresadas</th>
                <th rowspan="1" colspan="1">Unidades Salidas</th>
                <th rowspan="1" colspan="1">Costo de U. Salidas</th>
                <th rowspan="1" colspan="1">Inventario Inicial</th>
                <th rowspan="1" colspan="1">Inventario Inventario Actual</th>
                <th rowspan="1" colspan="1">Costo inventario</th>
                <th rowspan="1" colspan="1">Detalles</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach($queries as $query)
            <tr>
                <td data-title="#" width="80px">{{ $loop->iteration }}</td>
                <td data-title="Codigo">{{ $query->code }}</td>
                <td data-title="Paciente">{{ $query->patient->name }}</td>
                <td data-title="Empleado">{{ $query->user->name }}</td>
                <td id="status" data-title="Estado" width="135px">
                    <button type="button" class="btn bg-danger-400 btn-md text-white">
                        <span>Inactivo</span>
                        <i class="fa fa-window-close ml-2"></i>
                    </button>
                </td>
                <td id="actions" data-title="Acciones" width="175px" class="text-center">
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
            @endforeach--}}

        </tbody>


    </table>

</div>
