<x-adminlte-modal wire:ignore.self id="EditRole" title="Editar Rol" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label>Nombre <span class="text-danger">*</span></label>
                    <input type="text" wire:model.lazy="roleName" class="form-control" placeholder="Ingrese el nombre del nuevo rol">
                    @error('roleName')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
        </div>

    </form>
    <x-slot name="footerSlot">

        <button wire:click="updateRole()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
            <div wire:loading>
                <span class="spinner-border spinner-border-sm"></span>
                Cargando..
            </div>
            <span wire:loading.remove>
                <i class="mr-1 fas fa-save"></i>
                Actualizar
            </span>
        </button>
        <button class="btn btn-md btn-default" data-dismiss="modal" wire:click.prevent="resetUI()">
            <i class="mr-1 fas fa-window-close"></i>
            Cerrar
        </button>

    </x-slot>
</x-adminlte-modal>
