<div>
    <div class="card card-outline card-primary-400">
        <div class="card-header p-3">
            <h4 class="panel-title">Administrar Caja - Movimientos de Caja<a class="heading-elements-toggle"><i class="icon-more"></i></a></h4>

            <small class="display-block">Fecha de Caja : 19/11/2022 - <strong>
                    <span class="label label-success label-rounded"><span class="text-bold text-white">VIGENTE / ABIERTA</span></span> </strong></small>

            <div class="heading-elements">
                <div class="btn-group heading-btn">

                    <button type="button" class="btn bg-green-600 dropdown-toggle text-white" data-toggle="dropdown">
                        <i class="icon-cash3 position-left"></i> <strong class="ml-2">Opciones</strong> <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-pen-minus pull-right text-secondary"></i> Editar Monto Inicial</a></li>
                        <li><a href="#"><i class="icon-printer2 pull-right text-secondary"></i>Reporte Detallado</a></li>
                        <li><a href="#"><i class="icon-register pull-right text-secondary"></i> Cerrar Caja</a></li>
                    </ul>
                </div>


                <div class="btn-group heading-btn">
                    <button type="button" class="btn bg-slate-700 text-white">
                        <i class="icon-price-tag position-left"></i>
                        <strong> Cortes de Caja</strong></button>
                </div>

            </div>

        </div>
        <div class="card-body p-3">
            <div class="row">
                <div class="col-md-5">
                    <div class="panel panel-flat">
                        <div class="table-responsive">
                            <table class="table table-md border">
                                <tbody>
                                    <tr>
                                        <td><i class="icon-square" style="color:#37474F;" aria-hidden="true"></i></td>
                                        <td class="text-grey-800">
                                            MONTO INICIAL<a data-toggle="modal" data-target=".bs-example-modal-sm" style="color:#5b5d5f"></a>
                                        </td>
                                        <td></td>
                                        <td id="inicial" class="text-right"> S/.  85.00</td>
                                        <input type="hidden" id="txtinicial" value="85.00">
                                    </tr>
                                    <tr>
                                        <td><i class="icon-square" style="color:#5cb85c;" aria-hidden="true"></i></td>
                                        <td class="text-teal">
                                            INGRESOS<a data-toggle="modal" data-target=".bs-example-modal-sm" style="color:#5b5d5f"> </a>
                                        </td>
                                        <td></td>
                                        <td id="ingresos" class="text-right">S/.  0.00</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon-square" style="color:#e9573f;" aria-hidden="true"></i></td>
                                        <td>
                                            DEVOLUCIONES
                                        </td>
                                        <td></td>
                                        <td id="devoluciones" class="text-right">S/.  0.00</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon-square" style="color:#f6bb42;" aria-hidden="true"></i></td>
                                        <td>
                                            PRÉSTAMOS
                                        </td>
                                        <td></td>
                                        <td id="prestamos" class="text-right">S/.  0.00</td>
                                    </tr>

                                    <tr>
                                        <td><i class="icon-square" style="color:#63d3e9;" aria-hidden="true"></i></td>
                                        <td class=" ">
                                            GASTOS
                                        </td>
                                        <td></td>
                                        <td id="gastos" class="text-right">S/.  0.00</td>
                                    </tr>
                                    <tr class="">
                                        <th class=""></th>
                                        <th class="text-success ">
                                            <h5>
                                                <strong>INGRESOS TOTALES</strong>
                                            </h5>
                                        </th>
                                        <th class=""></th>
                                        <th class="text-right text-success">
                                            <h5><strong id="Ingresos">S/.  0.00</strong></h5>
                                        </th>
                                    </tr>
                                    <tr class="">
                                        <th class=""></th>
                                        <th class="text-danger ">
                                            <h5>
                                                <strong>EGRESOS TOTALES</strong>
                                            </h5>
                                        </th>
                                        <th class=""></th>
                                        <th class="text-right text-danger">
                                            <h5><strong id="Egresos">S/.  0.00</strong></h5>
                                        </th>
                                    </tr>
                                    <tr class="">
                                        <td class=""></td>
                                        <td class="">
                                            <h5>
                                                <strong>SALDO</strong>
                                            </h5>
                                        </td>
                                        <th class=""></th>
                                        <th class="text-right">
                                            <h5><strong id="Saldo">S/.  0.00</strong></h5>
                                        </th>
                                    </tr>
                                    <tr class="">
                                        <td class=""></td>
                                        <td class="text-info">
                                            <h5>
                                                <strong>MONTO INICIAL + SALDO </strong>
                                            </h5>
                                        </td>
                                        <th class=""></th>
                                        <th class="text-right text-info">
                                            <h5><strong id="Diferencia">S/.  85.00</strong></h5>
                                        </th>
                                        <input type="hidden" id="txtdiferencia" value="85.00">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 p-4">
                    <canvas id="myChart"></canvas>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>


@endsection
