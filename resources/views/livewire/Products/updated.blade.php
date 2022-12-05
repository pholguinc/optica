<x-adminlte-modal wire:ignore.self id="EditProduct" title="Actualizar Producto" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-box"></i></span>
                        </div>
                        <input wire:model="name" type="text" class="form-control" placeholder="Nombre del producto">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Código</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input wire:model="barcode" type="text" class="form-control" placeholder="Código del producto">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Costo</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input wire:model="cost" type="text" class="form-control" placeholder="Costo del producto">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Precio</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input wire:model="price" type="text" class="form-control" placeholder="Precio del producto">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Stock</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input wire:model="stock" type="text" class="form-control" placeholder="Stock del producto">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Alertas</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input wire:model="alerts" type="text" class="form-control" placeholder="Alertas">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Categoría</label>
                    <select wire:model='categoryId' class="custom-select rounded-0">
                        <option value="Elegir" disabled>Elegir</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-8">
                <div class="form-group custom-file">
                    <input type="file" class="custom-file-input" wire:model='image' accept="image/x-png, image/jpeg">
                    <label class="custom-file-label">Imagen {{$image}}</label>
                </div>
            </div>
        </div>

    </form>
    <x-slot name="footerSlot">

        <button wire:click="CreateProduct()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
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
