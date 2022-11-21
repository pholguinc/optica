<x-adminlte-modal id="EditUser" title="Editar Usuario" theme="blue-400" icon="fas fa-bolt" size='lg'>
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
                    <label>Usuario <span class="text-danger">*</span></label>
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
                    <label>Nombres <span class="text-danger">*</span></label>
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
                    <label>Email <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Ingrese su e-mail...">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Contraseña <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Ingrese su contraseña">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Celular <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="number" class="form-control" placeholder="Ingrese su teléfono...">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Tipo de Documento <span class="text-danger">*</span></label>
                    <select class="form-control select2 js-example-basic-single" style="width: 100%;">
                        <option selected="selected">DNI</option>
                        <option>C.E</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Cargo <span class="text-danger">*</span></label>
                    <select class="form-control select2 js-example-basic-single" style="width: 100%;">
                        <option selected="selected">Administrador</option>
                        <option>Empleado</option>
                        <option>Doctor</option>
                        <option>Paciente</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
    <x-slot name="footerSlot">
        <x-adminlte-button class="bg-primary-400" icon="fas fa-save mr-1" label="Registrar" />
        <x-adminlte-button theme="danger" icon="fas fa-window-close mr-1" label="Cerrar" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>
