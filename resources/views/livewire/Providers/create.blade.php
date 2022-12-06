<x-adminlte-modal wire:ignore.self id="modalProvider" title="Registrar Nuevo Producto" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-box"></i></span>
                        </div>
                        <input wire:model="name" type="text" class="form-control" placeholder="Nombre del proveedor">
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Dirección</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input wire:model="address" type="text" class="form-control" placeholder="Direccion">
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label>Contacto</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input wire:model="phone" type="text" class="form-control" placeholder="Contacto">
                    </div>
                </div>
            </div>

        </div>

    </form>
    <x-slot name="footerSlot">

        <button wire:click="CreateProvider()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
            <div wire:loading>
                <span class="spinner-border spinner-border-sm"></span>
                Cargando...
            </div>
            <span wire:loading.remove>
                <i class="mr-1 fas fa-save"></i>
                Guardar
            </span>
        </button>
        <button class="btn btn-md btn-default" data-dismiss="modal" wire:click.prevent="resetUI()">
            <i class="mr-1 fas fa-window-close"></i>
            Cerrar
        </button>

    </x-slot>
</x-adminlte-modal>
