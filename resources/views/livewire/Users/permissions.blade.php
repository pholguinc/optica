<x-adminlte-modal id="modalPermissions" title="Asinar Permisos" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="alert alert-info alert-styled-left text-blue-800 content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
        <input type="hidden" id="txtID" name="txtID" class="form-control" value="">
        <input type="hidden" id="txtProceso" name="txtProceso" class="form-control" value="Registro">
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label>Usuario:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" readonly disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label>Permisos:</label>


                        <div>
                            <div class="row">
                                @foreach($permissions as $permission)
                                <div class="col-md-6">
                                    <label>
                                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=> 'mr-1']) !!}
                                        {{ $permission->description }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
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
