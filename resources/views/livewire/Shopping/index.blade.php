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
            <li class="font-weight-bold text-dark breadcrumb-item active">Compras</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-7">
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
                                    <input type="number" step="any" class="form-control" id="pcantidad" name="pcantidad" min="0" placeholder="0.00" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">P. compra</label>
                                    <input type="number" step="any" class="form-control" id="pprecio_compra" name="pprecio_compra" min="0" placeholder="0.00" onkeypress="return filterFloatdecimal2(event,this);">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">P. venta</label>
                                    <input type="number" step="any" class="form-control" id="pprecio_venta" name="pprecio_venta" min="0" placeholder="0.00" onkeypress="return filterFloatdecimal2(event,this);">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group btn_css">
                                    <button type="button" id="btn_addentradas" class="btn btn-default btn1">
                                        <i class="fas fa-check-circle text-success"></i>
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Articulo</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio compra</th>
                                    <th scope="col">
                                        <i class="fas fa-trash-alt ml-2"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p class="mt-2">1</p></td>
                                    <td><p class="mt-2">00001</p></td>
                                    <td><p class="mt-2" style="font-size:12px">LENTE OFTALMICO - RALPH</p></td>
                                    <td><input type="number" class="size_input mt-2" readonly="" value="5.0"></td>
                                    <td><input type="number" class="size_input mt-2" readonly="" value="215.0"></td>

                                    <td><button type="button" class="btn btn-danger btn-sm mt-2 ml-2"><i class="fas fa-trash-alt"></i></button></td>
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
        <div class="col-md-5">
            <div class="card card-primary card-outline">
                <div class="card-header head-dark">
                    <h3 class="card-title">Datos</h3>
                </div>
                <div class="card-body">
                    <div class="container p-0">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span style="background:#32383e;" class="input-group-text"><i class="fas fa-dollar-sign text-white"></i></span>
                                </div>
                                <input type="text" class="form-control text-center text-secondary" style="font-size:2rem; padding:1.5rem;" value="0.00" autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">N° de Compra</label>
                                    <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-secondary text-center" autocomplete="off" readonly value="000001">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Fecha</label>
                                    <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control text-secondary text-center" autocomplete="off" readonly value="18-11-2022">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label>Nombre del proveedor</label>
                                <div class="autocomplete">
                                    <input type="text" placeholder="Ingresar el nombre del proveedor..." class="form-control" autocomplete="off" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="">Razón Social</label>
                                <input type="text" class="form-control" placeholder="Ingresar la dirección del proveedor..." autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="">Total $</label>
                                        <input type="text" class="form-control" name="total_input" id="total_input" placeholder="00.00" readonly="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="">Subtotal $</label>
                                        <input type="text" class="form-control" name="total_input" id="total_input" placeholder="00.00" readonly="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="">I.G.V</label>
                                        <input type="text" class="form-control" name="total_input" id="total_input" placeholder="00.00" readonly="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-2">
                            <button type="submit" id="form_save_entradas" class="btn btn-dark btn-block">
                                <i class="fas fa-check-circle text-success"></i>
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
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

    /*fin*/
    /* #detalles > td {
    border: 1px solid;
    font-size: 11px;
    text-overflow: ellipsis;
} */

    /* #venta_realizada{
    width:126px;
    height:40px;
} */

    /*ESTILO PARA EL IMPUT DE BUSQUEDA CON JQUERY UI*/
    /* .ui-menu-item{
    width:540px;
    height: 68px;
    border: 1px solid #ececf9;
}
.ui-widget-content .ui-state-active {
    background-color: white !important;
    border: none !important;
}
.list_item_container {
    width:540px;
    height: 68px;
    float: left;
    margin-left: -4px;
}
.ui-widget-content .ui-state-active .list_item_container {
    background-color: #DCDCDC;
}

.img_producto {
    float: left;
     margin: 0px 15px 15px 0px;

}*/

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
