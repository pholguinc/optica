<div class="row py-5">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hovered">
                    <thead class="bg-dark">
                        <tr>
                            <th rowspan="1" colspan="1">Imagen</th>
                            <th rowspan="1" colspan="1">Descripción</th>
                            <th rowspan="1" colspan="1">Precio</th>
                            <th rowspan="1" colspan="1">Cantidad</th>
                            <th rowspan="1" colspan="1">Importe</th>
                            <th rowspan="1" colspan="1">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="100px">
                                <img src="https://i.imgur.com/IAf3ZMQ.png" alt="" width="150">
                            </td>
                            <td>Lentes de Sol</td>
                            <td>S/. 80.00</td>
                            <td>2</td>
                            <td>S/. 100.00</td>
                            <td width="175px" class="text-center">
                                <a href="" class="btn bg-blue-400 btn-md text-white" data-toggle="tooltip" data-placement="top" title="Agregar">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <a href="" class="btn bg-danger-400 btn-md text-white" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center font-weight-bold">RESUMEN DE VENTA</h3>
                <div class="p-3" style="font-size: 2rem; display:grid; background: #e7e7e7">
                    <span>TOTAL: S/. 9800.00</span>
                    <span>Productos: 8</span>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Ingrese su el monto">
                        <button class="btn bg-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <h4 class="mb-4">Cambio: S/0.00</h4>

                    <button class="btn bg-primary">
                        Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


@section('css')
    @vite('resources/css/colors.css')
    @vite('resources/css/components.css')

    <style>
        @media (max-width: 575.98px) {
            #button-add {
                display: grid;
                margin-top: 10px;
            }
        }

        .tooltip {
            top: 0;
        }
    </style>
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
