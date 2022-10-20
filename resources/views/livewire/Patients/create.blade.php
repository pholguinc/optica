<x-adminlte-modal id="modalPurple" title="Theme Purple" theme="purple" icon="fas fa-bolt" size='lg'>
    <div class="alert alert-info alert-styled-left text-blue-800 content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
        <input type="hidden" id="txtID" name="txtID" class="form-control" value="">
        <input type="hidden" id="txtProceso" name="txtProceso" class="form-control" value="Registro">
    </div>
    <form>
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Código</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input type="number" class="form-control" placeholder="Código Autogenerado" readonly disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nombres <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre de usuario...">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Apellidos Paternos <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Ingrese sus nombres...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Apellidos Maternos <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Ingrese sus nombres...">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Sexo <span class="text-danger">*</span></label>
                    <select class="form-control select2 js-example-basic-single" style="width: 100%;">
                        <option selected="selected">Seleccionar</option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Teléfono <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Ingrese sus nombres...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Dirección <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Ingrese sus nombres...">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <x-slot name="footerSlot">
        <x-adminlte-button class="bg-primary-400" icon="fas fa-save mr-1" label="Registrar" />
        <x-adminlte-button theme="danger" icon="fas fa-window-close mr-1" label="Cerrar" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>


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


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                minimumResultsForSearch: -1
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection

@section('footer')
    @include('components.footer')
@endsection
