<div>
    <div class="border mb-4">
        <ol class="breadcrumb mb-0 bg-white">
            <li class="breadcrumb-item">
                <i class="fas fa-home mr-2 text-secondary"></i>
                <a href="/admin">
                    <span class="text-secondary">Inicio</span>
                </a>
            </li>
            <li class="breadcrumb-item text-secondary">POS</li>
            <li class="font-weight-bold text-dark breadcrumb-item active">Ventas</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span style="background:white;" class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>

                                        <input type="text" class="form-control input-search" placeholder="Buscar por el nombre" autocomplete="off">
                                        <ul id="autocomplete" tabindex="1" class="list-group" style="display: block;">
                                            <li value="Teclado mecanico" class="list-group-item selected" style="width:495px">
                                                <div class="d-flex flex-row" style="margin-right:-17px;margin-top:-10px;margin-left:-19px;margin-bottom:-10px;">
                                                    <div class="p-2 text-center">
                                                        <img src="https://i.imgur.com/o1iPNJe.jpg" class="img-thumbnail" width="50" height="50">
                                                    </div>
                                                    <div class="p-2">
                                                        LENTE OFTALMICO - RALPH - RL7020#599
                                                        <p class="card-text">P. compra S/. 259.00</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Cantidad</label>
                                    <input type="number" class="form-control input-sm" id="pcantidad" name="pvcantidad" min="0" step="0.00" placeholder="0.00" onkeypress="return filterFloat(event,this);">
                                    <!-- <input type="text" name="moneda nac" id="moneda_nac" value="10" onkeypress="return filterFloat(event,this);"/> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Stock</label>
                                    <input type="number" class="form-control input-sm" id="pvstock" name="pvstock" min="0" readonly="" step="0.00" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">P. venta</label>
                                    <input type="number" class="form-control input-sm" id="pvprecio_venta" name="pvprecio_venta" readonly="" min="0" step="0.04" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Descuento</label>
                                    <input type="number" class="form-control input-sm" id="pvdescuento" name="pvdescuento" min="0" step="0.00" placeholder="0.00" readonly="" onkeypress="return filterFloatdecimal2(event,this);">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default btn1" id="btn_add_prod_tem_vent"><i class="fas fa-check-circle text-success"></i> Agregar</button>
                        <div class="alert alert-danger print-save-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                    </form>
                </div>
                <div class="card-body p-0">

                    <div class="table-responsive-sm tableFixHead" style="height: 330px;">
                        <table id="detalles" style="width: 100%;" class="table table-sm table-bordered table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                  <th>Num</th>
                                  <th>Articulo</th>
                                  <th>Cantidad</th>
                                  <th>P. venta</th>
                                  <th>Descuento</th>
                                  <th scope="col"><i class="fas fa-trash-alt"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><input type="hidden" name="idarticulo[]" value="28">Teclado mecanico</td>
                                    <td><input type="number" class="size_input" readonly="" name="cantidad[]" value="2.000"></td>
                                    <td><input type="number" class="size_input" readonly="" name="precio_venta[]" value="215.00"></td>
                                    <td><input type="number" class="size_input" readonly="" name="descuento[]" value="2.00"></td>

                                    <td><button type="button" class="btn btn-danger btn-sm delete_btn_prod_venta" name="134,28"><i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-md-10 text-right">
                                <h5 class="input_all_total"><strong>Total $</strong></h5>
                            </div>
                            <div class="col-md-2 mb-3">
                                <input type="text" class="form-control input_total" placeholder="00.00" readonly="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- /.card-body -->
            <div class="card">
              <div class="card-header card-primary card-outline">
                <h3 class="card-title">Datos de la venta</h3>
              </div>
              <div class="card-body p-2">
                <div class="container">
                  <div class="mb-3">
                    <label for="nombre">Cliente</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Nombre del cliente" autocomplete="off" readonly="">
                      <button type="button" class="btn btn-sm btn-dark"><i class="fas fa-users"></i></button>
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="row">
                      <div class="col">
                        <div class="group">
                          <label for="">Comprobante</label>
                          <select name="venttipo_comprobante" class="form-control" id="">
                            <option value="Ticket">Ticket</option>
                            <option value="Factura">Factura</option>
                          </select>
                        </div>
                      </div>
                      <div class="col">
                        <div class="group">
                            <label for="">Folio</label>
                            <input type="text" name="ventfolio" id="ventfonio" value="202211185215" class="form-control" placeholder="num de folio" readonly="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <br>
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header card-primary card-outline">
                <h3 class="card-title">Realizar venta</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-2">
                <div class="container">
                  <div class="mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control text-center input_style_total"  placeholder="00.00" readonly="">
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="">Cantidad</label>
                          <input type="text" class="form-control input_style" placeholder="$ 0.00" autocomplete="off">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                        <label for="">Cambio</label>
                        <input type="text" class="form-control input_style" readonly="" placeholder="$ 0.00">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                      <button type="submit" class="btn btn-block btn-dark">
                        <i class="fas fa-check-circle text-success"></i>
                        Aceptar
                      </button>
                    </div>
                  </div>
                </div>
                <!--<ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <div class="form-group">
                      <input type="text" name="venttotal_venta" class="form-control text-center input_style_total" id="venttotal_venta" placeholder="00.00" readonly>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="">Cantidad</label>
                          <input type="text" id="ventdinero" name="ventdinero" class="form-control input_style" placeholder="$ 0.00" onkeypress="return filterFloatdecimal2(event,this);" autocomplete="off">
                        </div>
                      </div>
                      <div class="col">
                        <di class="form-group">
                        <label for="">Cambio</label>
                        <input type="text" id="ventsuelto" name="ventsuelto" class="form-control input_style" readonly placeholder="$ 0.00">
                        </di>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <br>
                    <button type="submit" id="venta_productos_realizada" class="btn btn-default btn-block btn1">
                      <i class="fas fa-check-circle text-success"></i>
                      Aceptar
                    </button>
                  </li>
                </ul>-->
              </div> <!-- /.fin  de card-body -->
            </div> <!-- /.fin card -->

          </div>
    </div>
</div>


@section('css')
@vite('resources/css/colors.css')
@vite('resources/css/components.css')

<style>
    .btn_css {
        margin-top: 32px;
    }

    .input_all_total {
        margin-top: 5px;
    }

    .input_style_total {
    font-size: 20px;
    font-family: 'PT Sans', sans-serif;
    font-weight: bold;
}

    .size_input {
        width: 100px;
        background-color: #ffffff;
        border: 0;
        text-align: center;
    }

    /*****************************************************************/
    /*the container must be positioned relative:*/
    #autocompleteli {
        position: absolute;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        background: red;
    }

    #autocompleteli li {
        padding: 10px;
        cursor: pointer;
        width: 100%;
    }

    .selected {
        color: white;
        background: #7f8c8d;
    }

    /*****************/
    /*the container must be positioned relative search prduct entrada:*/
    #autocomplete {
        margin-top: 40px;
        background-color: #7f7f9f;
        position: absolute;
        box-shadow: 0 1px 3px 0px;
        border-radius: 3px;
        z-index: 100;
        overflow-y: auto;
        margin-left: 40px;
        background: red;
        font-size: 15px;
        font-family: 'PT Sans', sans-serif;
        font-weight: bold;
    }

    /*estilos de la letra de las tablas*/
    #detalles td {
        font-family: monospace;
        /* white-space: pre;
  overflow: hidden;
  width: 5ch;
  text-overflow: ellipsis; */
    }

    #detalles th {
        /* font-family: monospace; */
        /*height:20px; */
        /* width:300%; */
    }

    /*scroll de la tabla de productos*/
    #detalles th {
        background: #0C162D;
        color: white;
        border: 1px solid;
        font-size: 11px;
        text-overflow: ellipsis;
        text-align: center;
    }

    .tableFixHead {
        /*overflow: scroll;*/
        overflow: auto;
        /*altura*/
        /* height: 300px; */
        /*anchura*/
        width: 100%;
        /*padding: auto;*/
    }

    .tableFixHead {
        /*background-color: #D5DBDB;*/
        border: 1px solid #A9A9A9;
        overflow: auto;
    }

    .tableFixHead thead th {
        position: sticky;

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
