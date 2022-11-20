<x-adminlte-modal wire:ignore.self id="modalRole" title="Registrar Nuevo Rol" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="alert alert-info alert-styled-left text-blue-800 content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label>Nombre <span class="text-danger">*</span></label>
                    <input type="text" wire:model.lazy="roleName" class="form-control" placeholder="Ingrese el nombre del nuevo rol" maxlength="255">
                </div>
            </div>
        </div>

    </form>
    <x-slot name="footerSlot">

        <button wire:click="CreateRole()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
            <div wire:loading>
                <span class="spinner-border spinner-border-sm"></span>
                Cargando...
            </div>
            <span wire:loading.remove>
                <i class="fas fa-save mr-1"></i>
                Guardar
            </span>
        </button>
        <button class="btn btn-md btn-default" data-dismiss="modal">
            <i class="fas fa-window-close mr-1"></i>
            Cerrar
        </button>

    </x-slot>
</x-adminlte-modal>

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

</script>
@endsection
